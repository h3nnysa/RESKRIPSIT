<?php 
require 'inc/koneksi.php';
$prob = $_GET ['idg'];
$query = mysql_query ("select *, t_gejala.*, t_pertanyaan.* from t_aturan inner join t_gejala on t_aturan.idg=t_gejala.idg 
					inner join t_pertanyaan on t_gejala.idg=t_pertanyaan.idg where t_gejala.idg='$prob'");

if ($h = mysql_fetch_array($query))
?>
<?
require 'inc/koneksi.php';
if(isset($_POST['update'])){
$idg = $_POST['idg'];
$jumMK	=$_POST['jumMK'];
$ya	=$_POST['ya'];
$tidak	=$_POST['tidak'];

$delsql = mysql_query("DELETE FROM Alias_A, Alias_B USING t_aturan AS Alias_A INNER JOIN t_pertanyaan AS Alias_B
	on Alias_A.idg=Alias_B.idg where Alias_A.idg='$idg'");
if ($delsql){
	$qryi=mysql_query("Insert into t_pertanyaan (id,idg,g_ya,g_tidak) values('','$idg','$ya','$tidak')");
	
	for($i=1; $i <$jumMK; $i++)
	{
	$mk=$_POST['mk'.$i];
	$mb=$_POST['mb'.$i];
	$md=$_POST['md'.$i];
	if (!empty($mk) && !empty($mb) && !empty($md))
	{
    $insql=  mysql_query("insert into t_aturan(ida,idg,idp,mb,md) values('','$idg','$mk', '$mb', '$md')");
    if ($insql && $qryi){
		  echo "<script>window.location.href = 'home.php?page=vrule&message=success';</script>";
	}else{
	
	}
}}}

}
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
echo "<select name =idg>";
if($_GET['aksi']=='edit'){
$query = "select * FROM t_gejala order by idg asc";
$id = mysql_query ($query);
while ($row=mysql_fetch_array($id)){

									if ($h[idg]==$row[idg]){
										echo"<option value=$row[idg] selected>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
									}else{
										echo"<option value=$row[idg]>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
								}
	}}
			echo"</select>";
							
?>	
                </td> 
			</tr>
			<tr valign="top">
			<td width="100">Penyakit</td>
			<td width="5">: </td>
			 <td width="10">
					<table width="100%">
<?php
if($_GET['aksi']=='edit'){
$query = "SELECT k.idp, k.nama, r.mb, r.md FROM t_aturan r
LEFT JOIN t_gejala g ON r.idg = g.idg
LEFT JOIN t_penyakit k ON r.idp = k.idp
WHERE r.idg = '$_GET[idg]'";
}
$result = mysql_query($query);
$no=1;
while ($row = mysql_fetch_array($result)) {
echo "<tr>
<td width='80%'><input type='checkbox' value='".$row['idp']."' name='mk".$no."' checked/>[".$row['idp']."]&nbsp;".$row['nama']."</td>
<td><input type=text name='mb".$no."' size=1 placeholder='MB' value = '".$row['mb']."'/>
<input type=text name='md".$no."' size=1 placeholder='MD' value = '".$row['md']."'><td></tr>";
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
if($_GET['aksi']=='edit'){
$query = "select * from t_gejala order by idg asc";
$id = mysql_query ($query);
while ($row=mysql_fetch_array($id)){
									if ($h[g_ya]==$row[idg])
										echo"<option value=$row[idg] selected>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
									else
										echo"<option value=$row[idg]>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
								}}
	
			echo"</select>";
							
?>	
                </td>
			</tr>
			<tr valign="top">
			<td width="100">Jika Tidak Maka</td>
			<td width="5">: </td>
			 <td width="10">
<?php
echo "<select name =tidak size=5>";
if($_GET['aksi']=='edit'){
$query = "select * from t_gejala order by idg asc";
$id = mysql_query ($query);
while ($row=mysql_fetch_array($id)){
									if ($h[g_tidak]==$row[idg])
										echo"<option value=$row[idg] selected>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
									else
										echo"<option value=$row[idg]>[$row[idg]]&nbsp;&nbsp;$row[gejala]</option>";
								}}
	
			echo"</select>";
							
?>	
</td>
<tr valign="top">
<td width="75"></td>
<td width="5"></td>
<td><?php if (isset($_GET['aksi'])=='edit'){
echo '<input class="button" type="submit" value="Update" name="update" />';
}else{
echo '<input class="button" type="submit" value="Simpan" name="simpan" />';}
?></td>
</tr>
</table>
</form>
                