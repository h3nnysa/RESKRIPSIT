
<?php
require "inc/koneksi.php";
require "script.php";
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT * FROM t_gejala ORDER BY idg ASC ");
?>		
<h3 align="center"><br> &nbsp &nbsp .: DATA GEJALA PENYAKIT KANKER KANDUNGAN :.</h3><br>           
	<div class="demo_jui">
	<br><br> 
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            
            <td align="center">No</td>
            <td align="center">Kode</td>
			<td align="center">Nama Gejala</td>
			<td align="center">Pertanyaan</td>
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
