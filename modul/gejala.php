<?php
require "inc/koneksi.php";
require "script.php";
require 'inc/buatid.php';
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT * FROM t_gejala ORDER BY idg ASC ");
?>		
<h3 align="center"><br> &nbsp &nbsp .: DATA GEJALA PENYAKIT KANKER KANDUNGAN :.</h3><br>   
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
            
            <td width="1%" align="center">No</td>
            <td width="2%" align="center">Kode</td>
			<td width="25%" align="center">Nama Gejala</td>
			<td width="25%" align="center">Pertanyaan</td>
			<td width="2%" align="center">Detail</td>
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	?>
		<tr class="gradeC">
			<td align="center"><?php echo $no; ?></td>			
			<td align="justify"><?php echo $konten['idg']; ?></td>
			<td align="justify"><?php echo $konten['gejala']; ?></td>
			<td align="justify"><?php echo $konten['pertanyaan']; ?></td>	
			<td align="center">
			<a href="home.php?page=gejala&aksi=edit&idg=<?php echo $konten['idg'];?>"> <img src="images/icons/pencil.png" alt="" title="edite" border="0" /></a>
			<a href="home.php?page=gejala&aksi=del&idg=<?php echo $konten['idg'];?>" onclick="return confirm('Anda yakin ingin menghapus?');"> <img src="images/icons/cross.png" alt="" title="Delete" border="0" /></a>
		
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

                    <div>
                        <p><h3>INPUT GEJALA</h3></p>

                    </div> <!-- End .content-box-header -->
               
<?php 
require 'inc/koneksi.php';

if (isset($_POST['simpan'])){
	$idg    		= buatID("t_gejala","G");
	$gejala			= $_POST['gejala'];
	$pertanyaan			= $_POST['pertanyaan'];
    $insql=  mysql_query("insert into t_gejala(idg,gejala,pertanyaan) values('$idg','$gejala','$pertanyaan')");
    if ($insql){
		  echo "<script>window.location.href = 'home.php?page=gejala&message=success';</script>";
	}else{
	
	}	
}

if (isset($_POST['update'])){
	$idg			= $_POST['idg'];
	$gejala    		= $_POST['gejala'];
	$pertanyaan    		= $_POST['pertanyaan'];
	    
    $edsql=  mysql_query("UPDATE `sipadu`.`t_gejala` SET idg='$idg', gejala='$gejala', pertanyaan='$pertanyaan' WHERE `t_gejala`.`idg` = '$idg';") or die(mysql_error());
    if ($edsql){
		  echo "<script>window.location.href = 'home.php?page=gejala';</script>";
	}else{
	
	}	    
}

if ($_GET['aksi']=="del"){
	$idg		= $_GET['idg'];
	$delsql = mysql_query("DELETE FROM t_gejala WHERE idg='$idg'");
	if ($delsql){
		  echo "<script>window.location.href = 'home.php?page=gejala';</script>";	
	}else{
	
	}
}
?>


            <form action="" id="form" method="post">
			<input type="hidden" name="idg" value="<?php 
			if (isset($_GET['aksi'])=="edit"){
			$idg 	= $_GET['idg'];
			$qedit	= mysql_query("SELECT * from t_gejala WHERE idg='$idg'");
			$redit	= mysql_fetch_assoc($qedit); echo $idg;
			$idg	= $redit['idg'];
			$gejala	= $redit['gejala'];
			$pertanyaan	= $redit['pertanyaan'];}?>">	
				<table>
			<tr valign="top">
			<td width="100">Kode gejala</td>
			<td width="5">: </td>
			<td><input name="idg" type="text"  value="<? echo buatID ("t_gejala","G"); ?>"  maxlength="4" disabled>
			</td>
			</tr>
			<tr valign="top">
			<td width="100">Gejala</td>
			<td width="5">: </td>
			<td><textarea  name="gejala"  cols="45" required ><?php echo $gejala;?></textarea></td>
			</tr>
			<tr valign="top">
			<td width="100">Pertanyaan</td>
			<td width="5">: </td>
			<td><textarea name="pertanyaan"  cols="45" required ><?php echo $pertanyaan;?></textarea></td>
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


