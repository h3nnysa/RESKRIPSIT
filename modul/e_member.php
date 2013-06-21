
                    
<?php 
require 'inc/koneksi.php';

if (isset($_POST['simpan'])){
	$nama    		= $_POST['xnama'];
	$username		= $_POST['xusername'];
	$umur			= $_POST['xumur'];
	$pek			= $_POST['xpek'];
	$status			= $_POST['xstatus'];
	$email			= $_POST['xemail'];
	$telepon		= $_POST['xtelepon'];
    $insql=  mysql_query("insert into t_pasien(nama,username,umur,pek,status,email,telepon) values('$nama','$username','$umur','$pek','$status','$email','$telepon')");
    
    $date = date("Y-m-d");
    $inusrsql=  mysql_query("insert into t_user values('$username','$username','10','$date','$date')") or die(mysql_error());
    if ($insql){
		echo "<script>window.location.href = 'index.php?page=gview&sukses=Guru baru telah ditambahkan';</script>";
	}else{
	
	}	
}

if (isset($_POST['update'])){
	$nama    		= $_POST['xnama'];
	$username		= $_POST['xusername'];
	$umur			= $_POST['xumur'];
	$pek			= $_POST['xpek'];
	$status			= $_POST['xstatus'];
	$email			= $_POST['xemail'];
	$telepon		= $_POST['xtelepon']; 
    $edsql=  mysql_query
	("UPDATE `sipadu`.`t_pasien` SET ids='$ids', nama='$nama', username='$username', umur='$umur', pek='$pek', status='$status', email='$email', telepon='$telepon'  WHERE `t_pasien`.`ids` = '$ids';") or die(mysql_error());
	if ($edsql){
		  echo "<script>window.location.href = 'home.php?page=vmember';</script>";
	}else{
	
	}	    
}

if ($_GET['aksi']=="del"){
	$ids	= $_GET['ids'];
	$delsql = mysql_query("DELETE FROM t_pasien WHERE ids='$ids'");
	if ($delsql){
		  echo "<script>window.location.href = 'home.php?page=vmember';</script>";	
	}else{
	
	}
}
?>
                       <!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Form Register</title>
	
	<!-- Include CSS -->
	<link rel="stylesheet" href="css/register.css"/>
	<link rel="stylesheet" href="css/contact.css"/>
	
</head>
<body>
	
	<form class="registri_form" action="" id="form" method="post">
	<input type="hidden" name="ids" value="<?php 
			if (isset($_GET['aksi'])=="edit"){
			$ids 	= $_GET['ids'];
			$qedit	= mysql_query("SELECT * from t_pasien WHERE ids='$ids'");
			$redit	= mysql_fetch_assoc($qedit); echo $ids;
			$ids	= $redit['ids'];
			$nama    		= $redit['xnama'];
			$username		= $redit['xusername'];
			$umur			= $redit['xumur'];
			$pek			= $redit['xpek'];
			$status			= $redit['xstatus'];
			$email			= $redit['xemail'];
			$telepon		= $redit['xtelepon']; }?>">
		<ul>
			<li>
				<center>EDIT MEMBER</center>
				
			</li>
			<li>
				<label for="name">Nama :</label>
				<input type="text" name="xnama"  placeholder="" required <?php echo $nama;?> />
				<span class="form_hint">inputkan nama lengkap</span>
			</li>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="xusername" placeholder="" required <?php echo $username;?> />
				<span class="form_hint">format maher@yahoo.co.id</span>
			</li>
			<li>
				<label for="umur">Umur :</label>
				<input type="text" name="xumur" placeholder="" required <?php echo $umur;?> />
				<span class="form_hint">format maher@yahoo.co.id</span>
			</li>
			<li>
				<label for="pekerjaan">Pekerjaan :</label>
				<input type="text" name="xpek" placeholder="" required  <?php echo $pek;?>/>
				<span class="form_hint">format maher@yahoo.co.id</span>
			</li>
			<li>
				<label for="status">Status :</label>
				<select name="xstatus">
			<option value="Kawin">Kawin</option>
			<option value="belum kawin">Belum Kawin</option>
			</select>
				<span class="form_hint">format maher@yahoo.co.id</span>
			</li>
			<li>
				<label for="email">E-mail :</label>
				<input type="email" name="xemail" placeholder="" required  <?php echo $email;?>/>
				<span class="form_hint">format maher@yahoo.co.id</span>
			</li>
			<li>
				<label for="email">Telepon :</label>
				<input type="text" name="xtelepon" placeholder="" required  <?php echo $telepon; ?> />
				<span class="form_hint">085729001164</span>
			</li>
			
			<li>
			  
				<button type="submit" name="simpan">Submit</button>
			  
			</li>
		</ul>
	</form>
	
</body>
</html>