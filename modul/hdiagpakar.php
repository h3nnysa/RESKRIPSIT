<?php
session_start();
require 'inc/koneksi.php';
require 'modul/core.php';

// echo "<pre>"; print_r($_SESSION['listgejala']); echo "</pre>";
	if (count($_SESSION['listgejala'])!=0){
		$hasil = CF($_SESSION['listgejala']);
		$hasilmax = doublemax($hasil['h']);
		$idpeny = $hasil['p'][$hasilmax['i']];
		//print_r($hasil);
		//print_r($hasilmax);
		//echo $idpeny;

	$penyakit = mysql_query("SELECT * FROM t_penyakit WHERE idp = '".$hasil['p'][$hasilmax['i']]."' LIMIT 0,1") or die(mysql_error());
	$datap = mysql_fetch_array($penyakit);
	
?>
<div class="content-box-header"><center><h4><u>HASIL PENELUSURAN PENYEBAB KANKER KANDUNGAN</u></h4></center><p></div>

<table width="100%">
	<tr valign="top">
	<td colspan="3">
		<h4>Dilihat Dari Gejala-Gejala Yang Anda Alami:</h4><br/>
	</td> 
	</tr>
	<tr valign="center">
		<td colspan="3"><?php 
			for ($i=0;$i<count($_SESSION['listgejala']);$i++){
				$idgejx = $_SESSION['listgejala'][$i];
				$lgej = mysql_query("SELECT idg, gejala FROM t_gejala WHERE idg='$idgejx'") or die(mysql_error());
				$dlgej = mysql_fetch_array($lgej);
				echo "<li>[".$dlgej['idg']."] ".$dlgej['gejala']."<br/>";
			}
		
		?></td>
	</tr>
	<tr valign="top">
	<td colspan="3">
		<br/><h4>Dugaan Sementara Anda Didiagnosa Mengidap Penyakit : <i><?php echo $datap ['nama'];?></i></h4><br/>
	</td> 
	</tr>
	<tr valign="center">
		<td colspan="3">-<?php echo $datap['desk'];?></td>
	</tr>
	<tr valign="center">
		<td colspan="3"><br/><h4>Penanganan Diagnosis : </h4><br/></td>
	</tr>
	<tr valign="center">
		<td colspan="3"><?php echo $datap['penanganan'];?></td>
	</tr>
	<tr valign="center">
		<td colspan="3"><br/><h4>DUGAAN PENYAKIT dengan tingkat kepercayaan (CF) : <i><?php echo $hasilmax['m'] ;?></i></h4><br/> </td>
	</tr>
	<td colspan="3" color="red">
		<br/><h4>~ INFORMASI ~ : Untuk mengetahui lebih jelas tentang penyakit yang anda derita, 
					silahkan konsultasi lebih lanjut ke dokter atau rumah sakit.</h4><br/>
	</td>

</table>

<?php
	}else{
?>
<div class="content-box-header"><center>HASIL PENELUSURAN PENYEBAB KANKER KANDUNGAN<center><p></div>

<table width="100%">
	<tr valign="top">
	<td colspan="3">
		<h4 align="center">Kemungkinan anda tidak sakit !</h4><br/>
	</td> 
	</tr>
</table>	
<?php	
	}
unset($_SESSION['listgejala']);
unset($_SESSION['list_gejala_setelah_umum']);
unset($_SESSION['listgejala']);
unset($_SESSION['hasil_gejala_umum']);
unset($_SESSION['list_gejala_umum']);
?>
