<?php
session_start();
require 'inc/koneksi.php';
	
	if (isset($_POST['cur'])){
		if (isset($_POST['ya'])){
			$next = $_POST['yaval'];
			array_push($_SESSION['listgejala'], $_POST['cur']);
		}else if(isset($_POST['tidak'])){
			$next = $_POST['tidakval'];
		}
		if ($next==""){
			echo "<script>window.location.href = 'home.php?page=hasildiag';</script>";
		}
	}else{
		$mulai = "G034";
		$next = $mulai;
		$_SESSION['listgejala'] = Array();
	}

	$qry = mysql_query("SELECT t.idg idg,t.g_ya,t.g_tidak,g.pertanyaan FROM `t_pertanyaan` t
						LEFT JOIN t_gejala g ON t.idg = g.idg WHERE t.idg='$next'") or die(mysql_error());
	$result = mysql_fetch_array($qry);
?>
<br><br><br>
<div class="content-box-header"><center><u><h4>DIAGNOSA AWAL KANKER KANDUNGAN<center><u/><h4/><p></div>

<form action="" id="form" method="post">	
	<input type="hidden" name="cur" value="<?php echo $result['idg'];?>"/>
	<input type="hidden" name="yaval" value="<?php echo $result['g_ya'];?>"/>
	<input type="hidden" name="tidakval" value="<?php echo $result['g_tidak'];?>"/>
	<table width="100%">
	<tr valign="top">
	<td>
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