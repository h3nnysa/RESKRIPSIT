<?php
require 'inc/koneksi.php';

	if (isset($_POST['simpan'])){
	$idg = $_POST['idg'];
	$jumMK	=$_POST['jumMK'];
	$ya	=$_POST['g_ya'];
	$tidak	=$_POST['g_tidak'];
$qryi=mysql_query("Insert into t_pertanyaan (id,idg,g_ya,g_tidak) values('','$idg','$ya','$tidak')");

for($i=1; $i <$jumMK; $i++)
	{
	$mk=$_POST['mk'.$i];
	$mb=$_POST['mb'.$i];
	$md=$_POST['md'.$i];
if (!empty($mk) && !empty($mb) && !empty($md))
{
    $insql= mysql_query("insert into t_aturan(ida,idg,idp,mb,md) values('','$idg','$mk', '$mb', '$md')");
    if ($insql && $qryi){
echo "<script>window.location.href = 'home.php?page=aturan';</script>";
}else{

}
}}} else if(isset($_POST['update'])){
$idg = $_POST['idg'];
$jumMK	=$_POST['jumMK'];
$ya	=$_POST['g_ya'];
$tidak	=$_POST['g_tidak'];

$check_id = mysql_query("SELECT idg FROM t_pertanyaan WHERE idg = '$idg'");
$isi = '';
while ($rows = mysql_fetch_array($check_id)) {
$isi = $rows['idg'];
}

if(empty($isi)){
mysql_query("INSERT INTO t_pertanyaan (id,idg,g_ya,g_tidak) VALUES ('','$idg','$ya','$tidak')");
}else{
mysql_query("UPDATE t_pertanyaan set g_ya ='$ya', g_tidak = '$tidak' where idg = '$idg'");
}

for($i=1; $i <$jumMK; $i++){
$mk=$_POST['mk'.$i];
$mb=$_POST['mb'.$i];
$md=$_POST['md'.$i];

if (!empty($mk) && !empty($mb) && !empty($md)){
$insql= mysql_query("UPDATE t_aturan set mb ='$mb', md ='$md' WHERE idg = '$idg' AND idp = '$mk'");
if ($insql){
echo "<script>window.location.href = 'home.php?page=view/vrule';</script>";
}else{

}
}
}
}



?>
<div>
<center>INPUT NILAI PROBABILITAS MB & MD<center><p>
</div>

<form action="" id="form" method="post">
<!--<input type="hidden" name="id" value="<?php
//if (isset($_GET['aksi'])=="edit"){
//$id = $_GET['ids'];
//$qedit = mysql_query("SELECT * from t_pasien WHERE id='$ids'");
//$redit = mysql_fetch_assoc($qedit); echo $id;
//$nama = $redit['nama'];
//$username = $redit['username'];}?>">-->
<table>
<tr valign="top">
<td width="100">Gejala</td>

<td>
<select name="idg" >
<?php
if($_GET['action']=='edit'){
$query = "SELECT * FROM t_gejala WHERE idg = '$_GET[idg]'";
}else{
$query = "SELECT * FROM t_gejala ORDER BY idg ASC";
}
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) {
echo '<option value="'.$rows[idg].'">['.$rows[idg].']&nbsp;&nbsp;&nbsp;'.$rows[gejala].'</option>';
}
?>
</select>
</td>
</tr>
<tr valign="top">
<td width="100">Bahan Kimia</td>
<td width="10">
<table width="100%">
<?php
if($_GET['action']=='edit'){
if($_GET['action']=='edit'){
$query = "SELECT k.idp, k.nama, r.mb, r.md FROM aturan r
LEFT JOIN t_gejala g ON r.idg = g.idg
LEFT JOIN t_penyakit k ON r.idp = k.idp
WHERE r.idg = '$_GET[idg]'";
}
}else{
$query = "SELECT * FROM t_penyakit ORDER BY idp ASC";
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
<tr valign="top">
<td width="100">Jika YA Maka</td>
<td width="10">
<select name="g_ya" size=5>
<?php
$query = "SELECT * FROM t_gejala ORDER BY idg ASC";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) {
echo '<option value="'.$rows[idg].'">['.$rows[idg].']&nbsp;&nbsp;&nbsp;'.$rows[gejala].'</option>';
}
?>
</select>
</td>
</tr>
<tr valign="top">
<td width="100">Jika Tidak Maka</td>
<td width="10">
<select name="g_tidak" size=5>
<?php
$query = "SELECT * FROM t_gejala ORDER BY idg ASC";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) {
echo '<option value="'.$rows[idg].'">['.$rows[idg].']&nbsp;&nbsp;&nbsp;'.$rows[gejala].'</option>';
}
?>
</select>
</td>
<tr valign="top">
<td width="75"></td>
<td><?php if (isset($_GET['action'])=='edit'){
echo '<input class="button" type="submit" value="Update" name="update" />';
}else{
echo '<input class="button" type="submit" value="Simpan" name="simpan" />';}
?></td>
</tr>
</table>
</form>


