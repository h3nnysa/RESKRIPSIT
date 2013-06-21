
<?php
require "inc/koneksi.php";
require "script.php";
if(empty($no))
$posisi=0;
$no=$posisi+1;

$que = mysql_query("SELECT *, u.* FROM t_penyakit p INNER JOIN t_diagnosa d ON p.idp= d.idp inner join t_user u on d.ids=u.idu ;");
?>		
<h3 align="center"><br> &nbsp &nbsp .: REKAMAN HASIL DIAGNOSA AWAL KANKER KANDUNGAN :.</h3><br>           
	<div class="demo_jui">
	
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            <td align="center">No</td>
            <td align="center">Nama</td>
            <td align="center">Umur</td>
			<td align="center">Hasil Diagnosa Penyakit</td>
			<td align="center">Nilai CF</td>
			<td align="center">Tgl Diagnosa</td>
			
			
		
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	?>
		<tr class="gradeC">
			<td align="center"><?php echo $no; ?></td>
			<td align="justify"><?php echo $konten['nama_lengkap']; ?></td>
			<td align="justify"><?php echo $konten['umur']; ?></td>
			<td align="justify"><?php echo $konten['nama']; ?></td>
			<td align="justify"><?php echo $konten['cf']; ?></td>
			<td align="justify"><?php echo $konten['tgl_diagnosa']; ?></td>
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
