
<?php
require "inc/koneksi.php";
require "script.php";
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT * FROM t_user where level='10' ");
?>		
<h3 align="center"><br> &nbsp &nbsp .: DATA MEMBER TERDAFTAR :.</h3><br>           
	<div class="demo_jui">
	<!--<td><a href='?page=register'><img id='icon' src='images/plus.jpg' alt='tambah' title='tambah'></a></td>
	-->
	<br><br> 
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            
            <td align="center">No</td>
            <td align="center">Nama</td>
			<td align="center">Umur</td>
			<td align="center">Alamat Email</td>
			<td align="center">Telepon</td>
			<!--<td align="center">Level</td>-->
			<td align="center">Create Date</td>
			
			
		
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	$idu = $konten['idu'];
	?>
		<tr class="gradeC">
			<td align="center"><?php echo $no; ?></td>
			<td align="justify"><?php echo $konten['nama_lengkap']; ?></td>
			<td align="justify"><?php echo $konten['umur']; ?></td>
			<td align="justify"><?php echo $konten['email']; ?></td>
			<td align="justify"><?php echo $konten['telepon']; ?></td>
			<!--<td align="justify"><?php echo $konten['level']; ?></td>-->
			<td align="justify"><?php echo $konten['create_date']; ?></td>
				
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
	$ids	= $_GET['ids'];
	$delsql = mysql_query("DELETE FROM t_pasien WHERE ids='$ids'");
	if ($delsql){
		  echo "<script>window.location.href = 'home.php?page=member';</script>";	
	}else{
	
	}
}
?>

