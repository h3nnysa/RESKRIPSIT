<?php	
function CF($listsakit = Array()){
	include "inc/koneksi.php";

	$CF = Array();
		
		$sqli = mysql_query('SELECT idp FROM t_penyakit') or die(mysql_error());
	if (count($listsakit)==1) {
		$i = 0;
		while ($data = mysql_fetch_array($sqli)){
			$idp = $data['idp'];
			$req = mysql_query("SELECT mb,md FROM t_aturan WHERE idp = '$idp' AND idg='".$listsakit[0]."'") or die(mysql_error());
			$mbmd = mysql_fetch_array($req);
			if ($mbmd['mb']!=""){
			$hitung = $mbmd['mb'] - $mbmd['md'];
			
				$CF['p'][$i] = $idp;
				$CF['h'][$i] = number_format($hitung, 3, ',', '');
				$i++;
			}
		}
	} elseif (count($listsakit)>1){
		$i = 0;
		while ($data = mysql_fetch_array($sqli)){
			$idp = $data['idp'];
			$req = mysql_query("SELECT mb,md FROM t_aturan WHERE idp='$idp' AND idg='".$listsakit[0]."'") or die(mysql_error());
			$mbmd = mysql_fetch_array($req);
			for ($j=1;$j<count($listsakit);$j++){
			$req1 = mysql_query("SELECT mb,md FROM t_aturan WHERE idp='$idp' AND idg='".$listsakit[$j]."'") or die(mysql_error());
			$mbmd1 = mysql_fetch_array($req1);
			  if (($mbmd['mb']!="") || ($mbmd1['mb']!="")){
			   if ($j==1){
				$mb = ($mbmd['mb']+$mbmd1['mb'] * (1 - $mbmd['mb']));
				$md = ($mbmd['md']+$mbmd1['md'] * (1 - $mbmd['md']));
			   }else{
				$mb = ($mb+$mbmd1['mb'] * (1 - $mb));
				$md = ($md+$mbmd1['md'] * (1 - $md));
			   }
			   }
			}				
			  if (($mbmd['mb']!="") || ($mbmd1['mb']!="")){
				$hitung = $mb - $md;
				$CF['p'][$i] = $idp;
				$CF['h'][$i] = number_format($hitung, 3, ',', '');
				$i++;
			  }
		   }
		}
	
	return $CF;
}

function doublemax($mylist){ 
	  $maxvalue=max($mylist); 
	  while(list($key,$value)=each($mylist)){ 
		if($value==$maxvalue)$maxindex=$key; 
	  } 
	  return array("m"=>$maxvalue,"i"=>$maxindex); 
}

function gejala_umum($bypass = "")
{
	include "inc/koneksi.php";	
	$sql = "SELECT GROUP_CONCAT(idg order by idg asc separator '_') FROM `t_aturan` group by idp";	
	$query = mysql_query($sql) or die(mysql_error());
	$list = array();

	while($result = mysql_fetch_array($query))
	{		
		$arr = explode("_", $result[0]);		
		$list[] = $arr;
	}		
	
	$gu = call_user_func_array('array_intersect', $list);	
	$list = array();
	foreach ($gu as $key => $value) {
		array_push($list, $value);
	}
	
	if($bypass=="")
	{
		$_SESSION['list_gejala_umum'] = $list;
	}
	else
	{
		return $list;
	}
	// echo "<pre>b"; print_r($list); echo "</pre>";
}

function gejala_setelah_umum($idp)
{	
	include "inc/koneksi.php";
	$cond = ($idp) ? "idp = '".$idp."'" : 1;	
	$sql = "SELECT GROUP_CONCAT(idg order by mb desc separator '_') FROM `t_aturan` WHERE $cond group by idp";	
	$query = mysql_query($sql) or die(mysql_error());
	$list = array();	
	while($result = mysql_fetch_array($query))
	{		
		$arr = explode("_", $result[0]);		
		$list = $arr;
	}

	$gu = gejala_umum(TRUE);

	$result = array_intersect($gu, $list);	
	
	$fin = array_diff($list, $result);

	$list = array();
	foreach ($fin as $key => $value) {
		array_push($list, $value);
	}
	
	$_SESSION['list_gejala_setelah_umum'] = $list;
	$_SESSION['list_gejala_umum'] = $list;

	return $list;
}
?>