<?php
require "inc/koneksi.php";
$userid = $_GET['hapus'];

	$query = mysql_query("DELETE FROM t_user WHERE userid='$userid'");
if($query){
		  echo "<script>window.location.href = 'home.php?page=user';</script>";	
}else{
	echo "<script language=Javascript>
	alert('Silahkan login terlebih dahulu');
	document.location='index.php';
	</script>";
}

?>