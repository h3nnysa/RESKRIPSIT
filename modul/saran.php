<?php 
require 'inc/koneksi.php';
$user = $_SESSION['userid'];
if (isset($_POST['simpan'])){
	$nama    		= $_POST['xnama'];
	$email			= $_POST['xemail'];
	$saran			= $_POST['xsaran'];
    $insql=  mysql_query("insert into t_saran(nama,email,saran, waktu) values('$nama','$email','$saran', NOW())") or die(mysql_error());
    if ($insql){
		echo "<script>window.location.href = 'home.php?page=saran&message=success';</script>";
	}else{
	
	}	
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Form Contact</title>
	<?php 
	if (!empty($_GET['message']) && $_GET['message'] == 'success') {
		echo '<center>Terima Kasih Atas Saranya <strong>'.$user.'</strong></center>';
	}
	?>
	
	<!-- Include CSS -->
	<link rel="stylesheet" href="css/saran.css"/>
	
</head>
<body>
	
	<form class="contact_form" action="" id="form" method="post" >
		<ul>
			<li>
				<h4>Hubungi Kami</h4>
				<span class="required_notification">*Field harus diisi</span>
			</li>
			<li>
				<label for="name">Nama :</label>
				<input type="text" name="xnama" placeholder="" required />
				<span class="form_hint">inputkan nama lengkap</span>
			</li>
			<li>
				<label for="email">E-mail :</label>
				<input type="email" name="xemail" placeholder="" required  />
				<span class="form_hint">format maher@yahoo.co.id</span>
			</li>
			<li>
				<label for="message">Pesan / Saran :</label>
				<textarea name="xsaran" cols="45" rows="5" required id="message"></textarea>
			  
			</li>
			<li>
			  
				<button type="submit"  name="simpan">Submit</button>
			  
			</li>
		</ul>
	</form>
	
</body>
</html>


