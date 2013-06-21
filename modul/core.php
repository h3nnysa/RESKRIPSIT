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
?>