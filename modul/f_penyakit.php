

<?php
require "inc/koneksi.php";
require "script.php";
require 'inc/buatid.php';
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT * FROM t_penyakit ORDER BY idp ASC ");
?>		
<h3 align="center"><br> &nbsp &nbsp .: DATA JENIS PENYAKIT KANKER KANDUNGAN :.</h3><br>
	<?php 
	if (!empty($_GET['message']) && $_GET['message'] == 'success') {
		echo '<center>Berhasil Menambah Data Baru </center>';
	}
	?> 
	<div class="demo_jui">
	<br><br> 
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            
            <td align="center">No</td>
            <td align="center">Kode</td>
			<td align="center">Jenis Penyakit</td>
			<td align="center">Deskripsi</td>
			<td align="center">Detail</td>
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	?>
		<tr class="gradeC">
			<td width="2%" align="center"><?php echo $no; ?></td>			
			<td width="2%" align="justify"><?php echo $konten['idp']; ?></td>
			<td width="10%" align="justify"><?php echo $konten['nama']; ?></td>
			<td width="54%" align="justify"><?php echo $konten['desk']; ?></td>	
			<td width="2%" align="center">
			<a href="home.php?page=f_penyakit&aksi=edit&idp=<?php echo $konten['idp'];?>"> <img src="images/icons/pencil.png" alt="Edit" /></a>	
            <a href="home.php?page=f_penyakit&aksi=del&idp=<?php echo $konten['idp'];?>" onclick="return confirm('Anda yakin ingin menghapus <?php echo $konten['idp'];?>?');"> <img src="images/icons/cross.png" alt="Delete" /></a>

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

                        <p><h3>INPUT GEJALA</h3></p>

                    </div> <!-- End .content-box-header -->
<?php 
require 'inc/koneksi.php';

if (isset($_POST['simpan'])){
	$idp    		= buatID("t_penyakit","P");
	$nama			= $_POST['nama'];
	$desk			= $_POST['desk'];
	$penanganan			= $_POST['penanganan'];
    $insql=  mysql_query("insert into t_penyakit(idp,nama,desk,penanganan) values('$idp','$nama','$desk', '$penanganan')");
    if ($insql){
		  echo "<script>window.location.href = 'home.php?page=f_penyakit&message=success';</script>";
	}else{
	
	}	
}


if (isset($_POST['update'])){
	$idp			= $_POST['idp'];
	$nama    		= $_POST['nama'];
	$desk    		= $_POST['desk'];
	$penanganan    		= $_POST['penanganan'];  
    $edsql=  mysql_query
	("UPDATE `sipadu`.`t_penyakit` SET idp='$idp', nama='$nama', desk='$desk', penanganan='$penanganan' WHERE `t_penyakit`.`idp` = '$idp';") or die(mysql_error());
	if ($edsql){
		  echo "<script>window.location.href = 'home.php?page=f_penyakit';</script>";
	}else{
	
	}	    
}

if ($_GET['aksi']=="del"){
	$idp	= $_GET['idp'];
	$delsql = mysql_query("DELETE FROM t_penyakit WHERE idp='$idp'");
	if ($delsql){
		  echo "<script>window.location.href = 'home.php?page=f_penyakit';</script>";	
	}else{
	
	}
}
?>

             <form action="" id="form" method="post">
			<input type="hidden" name="idp" value="<?php 
			if (isset($_GET['aksi'])=="edit"){
			$idp 	= $_GET['idp'];
			$qedit	= mysql_query("SELECT * from t_penyakit WHERE idp='$idp'");
			$redit	= mysql_fetch_assoc($qedit); echo $idp;
			$idp	= $redit['idp'];
			$nama	= $redit['nama'];
			$desk	= $redit['desk'];
			$penanganan	= $redit['penanganan'];}?>">	
				<table center>
			<tr valign="top">
			<td width="100">Kode Penyakit</td>
			<td width="5">: </td>
			<td><input name="idp" type="text"  value="<? echo buatID ("t_penyakit","P"); ?>"  maxlength="4" disabled>
			</td>
			</tr>
			<tr valign="top">
			<td width="100">Jenis Penyakit</td>
			<td width="5">: </td>
			<td><textarea name="nama"  cols="25" id="alamatsurat" required ><?php echo $nama;?></textarea></td>
			</tr>
			<tr valign="top">
			<td width="100">Deskripsi</td>
			<td width="5">: </td>
			<td><textarea name="desk"  style="height: 100px; width:480px;" id="alamatsurat" required><?php echo $desk;?></textarea></td>
			</tr>
			<tr valign="top">
			<td width="100">penanganan</td>
			<td width="5">: </td>
			<td><textarea name="penanganan"  style="height: 100px; width:480px;" id="alamatsurat" required><?php echo $penanganan;?></textarea></td>
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

