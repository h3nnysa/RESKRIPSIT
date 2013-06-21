<?php 
require 'inc/koneksi.php';
$prob = $_GET ['idg'];
$query = mysql_query ("select *, t_gejala.*, t_pertanyaan.* from t_aturan inner join t_gejala on t_aturan.idg=t_gejala.idg 
					inner join t_pertanyaan on t_gejala.idg=t_pertanyaan.idg where t_gejala.idg='$prob'");

if ($h = mysql_fetch_array($query))
?>
<div>
<center>EDIT NILAI PROBABILITAS MB & MD<center><p>
</div>

 <form action="" id="form" method="post">
			<!--<input type="hidden" name="id" value="<?php 
			//if (isset($_GET['aksi'])=="edit"){
		//$id 	= $_GET['ids'];
		//$qedit	= mysql_query("SELECT * from t_pasien WHERE id='$ids'");
		//$redit	= mysql_fetch_assoc($qedit); echo $id;
		//$nama	= $redit['nama'];
		//$username	= $redit['username'];}?>">-->	
				<table>
			<tr valign="top">
			<td width="100">Gejala</td>
			<td width="5">: </td>
			 <td>
<?php
echo "<select name =gejala>";
$query = "select * FROM t_gejala order by idg asc";
$id = mysql_query ($query);
while ($row=mysql_fetch_array($id)){

									if ($h[idg]==$row[idg]){
										echo"<option value=$row[idg] selected>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
									}else{
										echo"<option value=$row[idg]>$row[gejala]</option>";
								}
	}
			echo"</select>";
							
?>	
					</select>
                </td> 
			</tr>
			<tr valign="top">
			<td width="100">Penyakit</td>
			<td width="5">: </td>
			 <td width="10">
					<table width="100%">
		          	<?php
			if($_GET['action']=='edit'){
if($_GET['action']=='edit'){
		$query = mysql_query("Select t_aturan.idp idin, t_aturan.mb mb, t_aturan.md md from t_aturan left join 
		t_gejala on t_aturan.idg=t_gejala.idg left join
		t_penyakit on t_aturan.idp=t_penyakit.idp where t_aturan.idg= '$prob'") or die(mysql_error());
}
}else{
$query = "SELECT * from t_penyakit order by idp ASC";
}
$result = mysql_query($query);
$no=1;
while ($rows = mysql_fetch_array($result)) {
echo "<tr>
<td width='80%'><input type='checkbox' value='".$rows['idp']."' name='mk".$no."' checked/>[".$rows['idp']."]&nbsp;".$rows['nama']."</td>
<td><input type=text name='mb".$no."' size=1 placeholder='MB' value = '".$rows['mb']."'/>
<input type=text name='md".$no."' size=1 placeholder='MD' value = '".$rows['md']."'><td></tr>";
$no++;
}
?>
					<input type="hidden" name="jumMK" value="<?php echo $no;?>"/>	
					</table>
				</td> 
			</tr>
			<tr>
			<td>Jika YA Maka</td>
			<td>: </td>
			 <td>
<?php
echo "<select name =ya size=5>";
$query = "select * from t_gejala order by idg asc";
$id = mysql_query ($query);
while ($row=mysql_fetch_array($id)){
									if ($h[g_ya]==$row[idg])
										echo"<option value=$row[idg] selected>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
									else
										echo"<option value=$row[idg]>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
								}
	
			echo"</select>";
							
?>	
                </td></select> 
			</tr>
			<tr valign="top">
			<td width="100">Jika Tidak Maka</td>
			<td width="5">: </td>
			 <td width="10">
<?php
echo "<select name =ya size=5>";
$query = "select * from t_gejala order by idg asc";
$id = mysql_query ($query);
while ($row=mysql_fetch_array($id)){
									if ($h[g_tidak]==$row[idg])
										echo"<option value=$row[idg] selected>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
									else
										echo"<option value=$row[idg]>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
								}
	
			echo"</select>";
							
?>	
                </td></tr></select> 
			
			<tr valign="top">
			<td width="75"></td>
			<td width="5"></td>
			<td><?php if (isset($_GET['aksi'])=='edit'){
				echo '<input class="button" type="submit" value="Simpan" name="update" />';
				}else{
				echo '<input class="button" type="submit" value="Simpan" name="simpan" />';}
			?></td>
			</tr>
				</table>
			</form>