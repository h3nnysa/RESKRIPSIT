<?php
require 'inc/koneksi.php';
require 'inc/buatid.php';
?>

<?php
require "inc/koneksi.php";
require "script.php";
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT * FROM t_user where level='30'");
?>		
<h3 align="center">&nbsp &nbsp .: Managemen Data Pakar :.</h3>  
<?php 
	if (!empty($_GET['message']) && $_GET['message'] == 'success') {
		echo '<center>Berhasil Menambah Data Baru</center>';
	}
	?>         
	<div class="demo_jui">
	<br><br> 
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            
            <td align="center">No</td>
            <td align="center">Nama Pakar</td>
            <td align="center">Username</td>
			<td align="center">Email</td>
			<td align="center">Telepon</td>
			<td align="center">Level</td>
			<td align="center">Create Date</td>
			<td align="center">Detail</td>
			
		
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	?>
		<tr class="gradeC">
						
			<td align="center"><?php echo $no; ?></td>
			<td align="justify"><?php echo $konten['nama_lengkap']; ?></td>
			<td align="justify"><?php echo $konten['userid']; ?></td>
			<td align="justify"><?php echo $konten['email']; ?></td>
			<td align="justify"><?php echo $konten['telepon']; ?></td>
			<td align="justify"><?php echo $konten['level']; ?></td>
			<td align="justify"><?php echo $konten['create_date']; ?></td>
			<td align="center">
			<a href="home.php?page=pakar&aksi=edite&idu=<?php echo $konten['idu'];?>"> <img src="images/icons/pencil.png" alt="" title="edite" border="0" /></a>
			<a href="home.php?page=pakar&aksi=del&username=<?php echo $konten['userid'];?>" onclick="return confirm('Anda yakin ingin menghapus?');"> <img src="images/icons/cross.png" alt="" title="Delete" border="0" /></a>
		
			<?php
			$no++;
			?>
			</td>
		</tr>
		
	<?php
		}
	?>	
	</table>
	</div>





                    <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->

                        <p><h3>INPUT DATA PAKAR</h3></p>

                    </div> <!-- End .content-box-header -->
<?php 
require 'inc/koneksi.php';

if (isset($_POST['simpan'])){
	
	$nama			= $_POST['nama'];
	$username		= $_POST['username'];
	$email			= $_POST['email'];
	$telepon		= $_POST['telepon'];
	
	$cek=mysql_query("select * from t_user where userid='$username'");
	$bcek=mysql_num_rows($cek);
				
	if ($bcek == 0)
				{  
    $date = date("Y-m-d");
    $inusrsql=  mysql_query("insert into t_user values('','$nama','$username','$username','','$email','$telepon','30','$date')") or die(mysql_error());
    if ($insql){
		  echo "<script>window.location.href ='home.php?page=saran&message=success';</script>";
	}else{
	}	
}else{
	echo "<script language=Javascript>
	alert('User yang Anda masukkan sudah terdaftar');
	window.location.href = 'home.php?page=pakar';
	</script>";

}
}


if (isset($_POST['update'])){
	$idu			= $_POST['idu'];
	$nama			= $_POST['nama'];
	$username		= $_POST['username'];
	$email			= $_POST['email'];
	$telepon		= $_POST['telepon']; 
    $edsql=  mysql_query
	("UPDATE `sipadu`.`t_user` SET nama_lengkap='$nama', userid='$username', email='$email', telepon='$telepon' WHERE `t_user`.`idu` = '$idu';") or die(mysql_error());
	if ($edsql){
		  echo "<script>window.location.href = 'home.php?page=pakar';</script>";
	}else{
	
	}	    
}

if ($_GET['aksi']=="del"){
	$user= $_GET['username'];
	$delsql2 = mysql_query("DELETE FROM t_user WHERE userid='$user'");
	if ($delsql && $delsql2){
		  echo "<script>window.location.href = 'home.php?page=pakar';</script>";	
	}else{
		echo "Data gagal dihapuss";
	}
}
?>

             <form action="" id="form" method="post">
			<input type="hidden" name="idu" value="<?php 
			if (isset($_GET['aksi'])=="edit"){
			$idu 	= $_GET['idu'];
			$qedit	= mysql_query("SELECT * from t_user WHERE idu='$idu'");
			$redit	= mysql_fetch_assoc($qedit); echo $idu;
			$idu	= $redit['idu'];
			$nama	= $redit['nama_lengkap'];
			$username	= $redit['userid'];
			$email		= $redit['email'];
			$telepon	= $redit['telepon'];
			
			}?>">	
				<table center>
			<tr valign="top">
			<td width="100">Nama Pakar</td>
			<td width="5">: </td>
			<td><input name="nama" type="text"  value="<?php echo $nama;?>">
			</td>
			</tr>
			<tr valign="top">
			<td width="100">Username</td>
			<td width="5">: </td>
			<td><input name="username" type="text"  value="<?php echo $username;?>" required/>
			</td>
			</tr>
			<tr valign="top">
			<td width="100">Email</td>
			<td width="5">: </td>
			<td><textarea name="email"  cols="25" id="email" required><?php echo $email;?></textarea></td>
			</tr>
			<tr valign="top">
			<td width="100">Telepon</td>
			<td width="5">: </td>
			<td><input name="telepon" id="telepon" value="<?php echo $telepon;?>" required/></td>
			</tr>
			<tr valign="top">
			<td width="75"></td>
			<td width="5"></td>
			<td><?php if (isset($_GET['aksi'])=='edit'){
				echo '<input class="button" type="submit" value="Simpan" name="update" />';
				}else{
				echo '<input class="button" type="submit" value="Tambahkan" name="simpan" />';}
			?></td>
			</tr>
				</table>
			</form>

