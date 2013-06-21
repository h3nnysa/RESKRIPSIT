<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("sipadu");//sesuaikan dengan nama database anda

$user = $_SESSION['userid'];
$selek=mysql_query("SELECT * FROM t_user where userid='$user'");
while ($data=mysql_fetch_array($selek)){
	$nananina=$data['password'];
}
if (isset($_POST['ganti'])){
	$passlama = ($_POST['passlama']);
	$passbaru = ($_POST['passbaru']);
	$confpassbaru = ($_POST['passbaruconf']);
		if (($passlama==$nananina) && ($passbaru==$confpassbaru)){

				$qgantipass = mysql_query("UPDATE t_user SET password='$passbaru' WHERE userid='$user'");
			if ($qgantipass){
					echo "<script>window.location.href = 'home.php?page=xhome&sukses=ANDA BERHASIL MERUBAH PASSWORD';</script>";
			}else{
					echo "<script>window.location.href = 'home.php?page=xhome&gagal=Gagal Merubah password, karena password tidak sama';</script>";
			}
		}else{
			echo "<script>window.location.href = 'home.php?page=xhome&gagal=Password lama anda salah';</script>";
		}
}
?>


<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Form Register</title>
	
	<!-- Include CSS -->
	<link rel="stylesheet" href="css/register.css"/>
	<link rel="stylesheet" href="css/saran.css"/>
	
</head>
<body>
	
	<form class="register_form" action="" id="form" method="post">
		<ul>
			<li>
				<center>Ganti Password <?php echo $user;?>
				
			</li>
			<li>
				<label for="name">Pass lama</label><td>
				<input name="passlama" type="password  placeholder="" required />
				<span class="form_hint">inputkan password lama</span>
			</li>
			
			<li>
				<label for="username">Pass baru</label>
				<input name="passbaru" type="password" placeholder="" required  />
				<span class="form_hint">inputkan password baru</span>
			</li>
			
			<li>
				<label for="umur">Pass baru konfirm</label>
				<input name="passbaruconf" type="password" placeholder="" required  />
				<span class="form_hint">inputkan password baru confirm</span>
			</li>
			
			<li>
			  
				<button type="submit" value="Ganti Password" name="ganti">Ganti password</button>
			  
			</li>
		</ul>
	</form>
	
</body>
</html>
