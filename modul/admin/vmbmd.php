
<?php
require 'inc/koneksi.php';
require 'script.php';
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT t_aturan . * , t_penyakit.nama a, t_penyakit.idp c, t_gejala.gejala b, t_gejala.idg d
FROM t_aturan
LEFT JOIN t_gejala ON t_gejala.idg = t_aturan.idg
LEFT JOIN t_penyakit ON t_penyakit.idp = t_aturan.idp group by t_aturan.idg ");
?>	
	
<h3 align="center"><br> &nbsp &nbsp .: VIEW PROBABILITAS NILAI MB & MD :.</h3><br>           
	<div class="demo_jui">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            <td width="1%" align="center">No</td>
            <td width="22%" align="center">Gejala</td>
			<td width="22%" align="center">Jenis Penyakit</td>
			<td width="10%" align="center">MB</td>
			<td width="11%" align="center">MD</td>			
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	?>
		<tr class="gradeC">
			<td align="center"><?php echo $no; ?></td>	
			<td align="justify"><?php echo $konten['d']." - ".$konten['b']; ?></td>
			<?php
				$id = $konten['idg'];
				$kueri = mysql_query("SELECT t_penyakit.idp id, t_penyakit.nama py, t_aturan.idp,t_aturan.mb, t_aturan.md
						FROM t_penyakit, t_aturan
						WHERE t_penyakit.idp = t_aturan.idp
						AND t_aturan.idg =  '$id' order by t_penyakit.idp ASC");
			?>
			<td width="">
			<?php
				while($q = mysql_fetch_array($kueri))
				{
					echo $q['id']." - ".$q['py']; 
					
					
					echo "<br>";
				}
			?>
			</td>
			<?php
				$id = $konten['idg'];
				$kueri = mysql_query("SELECT t_penyakit.idp id, t_penyakit.nama py, t_aturan.idp,t_aturan.mb, t_aturan.md
						FROM t_penyakit, t_aturan
						WHERE t_penyakit.idp = t_aturan.idp
						AND t_aturan.idg =  '$id' order by t_penyakit.idp ASC");
			?>
			<td align="left">
			<?php
				while($q = mysql_fetch_array($kueri))
				{
					 
					echo $q['id']." - ".$q['mb'];
					
					
					echo "<br>";
				}
			?>
			</td>
			<?php
				$id = $konten['idg'];
				$kueri = mysql_query("SELECT t_penyakit.idp id, t_penyakit.nama py, t_aturan.idp,t_aturan.mb, t_aturan.md
						FROM t_penyakit, t_aturan
						WHERE t_penyakit.idp = t_aturan.idp
						AND t_aturan.idg =  '$id' order by t_penyakit.idp ASC");
			?>
			<td align="left">
			<?php
				while($q = mysql_fetch_array($kueri))
				{
					echo $q['id']." - ".$q['md'];
					
					echo "<br>";
				}
			?>
			</td>	
		<?php
		$no++;
		?>
				</tr>
		
	<?php
		}
	?>	
	</table>
	</div>