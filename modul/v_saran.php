<?php
require 'inc/koneksi.php';

$slc="SELECT *FROM t_saran ORDER BY waktu DESC";
$slcsql=mysql_query($slc);
?>
<table width="100%" border="0">
 <center>DATA SARAN MEMBER<center>
<?php
while($row=mysql_fetch_array($slcsql)){?>

<tr>
<td width="5%">Nama </td>
<td  width="70%"><?php echo $row['nama'];?></td>

<tr/>

<tr>
<td width="26%">Email </td>
<td><?php echo $row['email'];?></td>
<tr/>

<tr>
<td width="26%">Waktu</td>
<td><?php echo $row['waktu'];?></td>
<tr/>

<tr>
<td width="26%">Komentar <br></td>
<td><?php echo $row['saran'];?><br>
<br></td><br>
			<?php
			echo '
			
			<td>
            <a href="home.php?page=v_saran&aksi=del&idn='.$row['idn'].'" onclick="return confirm(\'Apakah kamu yakin ingin menghapus '.$row['v_saran'].' ?\');" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a></td>';?>

<?php

if ($_GET['aksi']=="del"){
	$id		= $_GET['idn'];
	$delsql = mysql_query("DELETE FROM t_saran WHERE idn='$id'");
	if ($delsql){
		echo "<script>window.location.href = 'home.php?page=v_saran';</script>";	
	}else{
	
	}
	}

}
?>

</table>

