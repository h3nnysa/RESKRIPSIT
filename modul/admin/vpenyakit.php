
<?php
require "inc/koneksi.php";
require "script.php";
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT * FROM t_penyakit ORDER BY idp ASC ");
?>		
<h3 align="center"><br> &nbsp &nbsp .: DATA JENIS PENYAKIT KANKER KANDUNGAN :.</h3><br>           
	<div class="demo_jui">
	<br><br> 
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            
            <td align="center">No</td>
            <td align="center">Kode</td>
			<td align="center">Jenis Penyakit</td>
			<td align="center">Deskripsi</td>
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	?>
		<tr class="gradeC">
			<td align="center"><?php echo $no; ?></td>			
			<td align="justify"><?php echo $konten['idp']; ?></td>
			<td align="justify"><?php echo $konten['nama']; ?></td>
			<td align="justify"><?php echo $konten['desk']; ?></td>	
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
