<?php 
require 'inc/koneksi.php';

if (isset($_POST['simpan'])){
	$nama    		= $_POST['xnama'];
	$username		= $_POST['xusername'];
	$umur			= $_POST['xumur'];
	$email			= $_POST['xemail'];
	$telepon		= $_POST['xtelepon'];
	
	$cek=mysql_query("select * from t_user where userid='$username'");
	$bcek=mysql_num_rows($cek);
				
	if ($bcek == 0)
				{ 
    $date = date("Y-m-d");
    $inusrsql=  mysql_query("insert into t_user values('','$nama','$username','$username','$umur','$email','$telepon','10','$date')") or die(mysql_error());
					echo "<table width='170%' border='0'><td align='left'><br>
					<tr><center>Selamat anda telah menjadi user kami, anda dapat menggunakan hak akses anda untuk melakukan login dengan data sebagai berikut: </td></tr>
							<br><tr><center>Username : $username</td></tr>
							<tr><center>Password : $username</td></tr>
						  </table>";
		
	}else
	{
	echo " <center> Maaf username sudah ada, silahkan coba dengan username berbeda </center>";
	}	
}

?>