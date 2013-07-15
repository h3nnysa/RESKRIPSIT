<?php
session_start();
if($_GET['sess'])
{
	unset($_SESSION['list_gejala_setelah_umum']);
	unset($_SESSION['listgejala']);
	unset($_SESSION['hasil_gejala_umum']);
	unset($_SESSION['list_gejala_umum']);
	echo "<script>window.location.href = 'home.php?page=diagpakar';</script>";	
}
require 'inc/koneksi.php';
require 'modul/core.php';
	
	if (isset($_POST['cur'])){		
		if (isset($_POST['ya'])){
			$next = $_POST['yaval'];
			$lgu = $_SESSION['list_gejala_umum'];
			$afternext = (isset($lgu[0])) ? $lgu[0] : "";				
			array_push($_SESSION['listgejala'], $_POST['cur']);
			array_push($_SESSION['hasil_gejala_umum'], $_POST['cur']);

			if ($next=="" && !isset($_SESSION['list_gejala_setelah_umum'])){
				// echo "<script>window.location.href = 'home.php?page=hdiagpakar';</script>";			
				$hasil = CF($_SESSION['hasil_gejala_umum']);			
				$hasilmax = doublemax($hasil['h']);
				$idpeny = $hasil['p'][$hasilmax['i']];
				$gsu = gejala_setelah_umum($idpeny);
				// echo "<pre>gsu"; print_r($gsu); echo "</pre>";
				$next = $gsu[0];
				$afternext = $gsu[1];

				array_splice($_SESSION['list_gejala_umum'], 0, 2); //remove first and second
			}

			if ($next=="" && !isset($_SESSION['list_gejala_setelah_umum']) && count($_SESSION['hasil_gejala_umum']) == 0){
				echo "<script>window.location.href = 'home.php?page=hdiagpakar';</script>";
			}			

		}else if(isset($_POST['tidak'])){
			$next = $_POST['tidakval'];
			$lgu = $_SESSION['list_gejala_umum'];
			$afternext = (isset($lgu[0])) ? $lgu[0] : "";				
			// array_splice($_SESSION['list_gejala_umum'], 0, 1); //remove first
			if ($next=="" && !isset($_SESSION['list_gejala_setelah_umum']) && count($_SESSION['hasil_gejala_umum']) > 0){
				// echo "<script>window.location.href = 'home.php?page=hdiagpakar';</script>";			
				$hasil = CF($_SESSION['hasil_gejala_umum']);			
				$hasilmax = doublemax($hasil['h']);
				$idpeny = $hasil['p'][$hasilmax['i']];
				$gsu = gejala_setelah_umum($idpeny);

				$next = $gsu[0];
				$afternext = $gsu[1];

				array_splice($_SESSION['list_gejala_umum'], 0, 2); //remove first and second
			}

			if ($next=="" && !isset($_SESSION['list_gejala_setelah_umum']) && count($_SESSION['hasil_gejala_umum']) == 0){
				echo "<script>window.location.href = 'home.php?page=hdiagpakar';</script>";
			}
		}
		
		array_splice($_SESSION['list_gejala_umum'], 0, 1); //remove first

		if ($next=="" && isset($_SESSION['list_gejala_setelah_umum'])){
			echo "<script>window.location.href = 'home.php?page=hdiagpakar';</script>";						
		}
	}else{
		$gu = gejala_umum();

		$lgu = $_SESSION['list_gejala_umum'];
		// $mulai = "G034";
		// $mulai = $gu[0];
		$mulai = $lgu[0];
		$next = $mulai;
		$afternext = $lgu[1];
		array_splice($_SESSION['list_gejala_umum'], 0, 2); //remove first and second
		$_SESSION['listgejala'] = Array();
		$_SESSION['hasil_gejala_umum'] = Array();
	}
	// echo "<pre>list"; print_r($_SESSION['list_gejala_umum']); echo "</pre>";
	// echo "<pre>hasil"; print_r($_SESSION['hasil_gejala_umum']); echo "</pre>";

	// $qry = mysql_query("SELECT t.idg idg,t.g_ya,t.g_tidak,g.pertanyaan FROM `t_pertanyaan` t
	// 					LEFT JOIN t_gejala g ON t.idg = g.idg WHERE t.idg='$next'") or die(mysql_error());
	$qry = mysql_query("SELECT * FROM t_gejala where idg = '$next'") or die(mysql_error());
	// echo ("SELECT t.idg idg,t.g_ya,t.g_tidak,g.pertanyaan FROM `t_pertanyaan` t LEFT JOIN t_gejala g ON t.idg = g.idg WHERE t.idg='$next'");
	$result = mysql_fetch_array($qry);
?>
<br><br><br>
<div class="content-box-header"><center><u><h4>DIAGNOSA AWAL KANKER KANDUNGAN</u></h4><center><p></div>

<form action="" id="form" method="post">	
	<input type="hidden" name="cur" value="<?php echo $result['idg'];?>"/>
	<!-- <input type="hidden" name="yaval" value="<?php // echo $result['g_ya'];?>"/> -->
	<!-- <input type="hidden" name="tidakval" value="<?php // echo $result['g_tidak'];?>"/> -->
	<input type="hidden" name="yaval" value="<?php echo $afternext; ?>"/>
	<input type="hidden" name="tidakval" value="<?php echo $afternext; ?>"/>
	<table width="100%">
	<tr valign="top">
	<td>
		<h4 align="center"><?php echo $result['idg'];?></h4><br/>
		<h4 align="center"><?php echo $result['pertanyaan'];?></h4><br/>
	</td> 
	</tr>			
	<tr valign="top">
	<td align="center"><?php echo '<input color="red" class="button" type="submit" value="Ya" name="ya" />
					<input class="button" type="submit" value="Tidak" name="tidak" />';
	?></td>
	</tr>
	</table>
</form>