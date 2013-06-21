
<?php
require "inc/koneksi.php";
require "script.php";
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT * FROM t_artikel ORDER BY idArtikel ASC ");
?>		
<h3 align="center"><br> &nbsp &nbsp .: MANAJEMEN DATA ARTIKEL :.</h3><br>           
	<div class="demo_jui">
	<td><a href='?page=editorteks'><img id='icon' src='images/plus.jpg' alt='tambah' title='tambah'></a></td>
	<br><br>
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            <td align="center">No.</td>
            <td align="center">Author</td>
			<td align="center">Judul Artikel</td>
			<td align="center">Tanggal Post</td>
			<td align="center">View</td>
			<td align="center">Detail</td>
			
		
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	?>
		<tr class="gradeC">
			<td align="center"><?php echo $no; ?></td>
			<td align="justify"><?php echo $konten['author']; ?></td>
			<td align="justify"><?php echo $konten['title']; ?></td>
			<td align="justify"><?php echo $konten['datePub']; ?></td>
			<td align="justify"><?php echo $konten['views']; ?></td>
			<td align="center"><a href="home.php?page=editorteks&aksi=edit&idArtikel=<?php echo $konten['idArtikel'];?>"> <img src="images/icons/pencil.png" alt="" title="Detail" border="0" /></a>
			<a href="home.php?page=editorteks&aksi=del&idArtikel=<?php echo $konten['idArtikel'];?>" onclick="return confirm('Apakah kamu yakin ingin menghapus');"> <img src="images/icons/cross.png" alt="" title="hapus" border="0" /></a>
			
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
	<?php 
require 'inc/koneksi.php';

if ($_GET['aksi']=="del"){
	$idArtikel	= $_GET['idArtikel'];
	$delsql = mysql_query("DELETE FROM t_artikel WHERE idArtikel='$idArtikel'");
	if ($delsql){
		  echo "<script>window.location.href = 'home.php?page=artikel';</script>";	
	}else{
	
	}
}
?>

