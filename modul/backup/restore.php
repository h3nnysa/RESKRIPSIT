<?php
// koneksi ke db mysql
//$dbHost = "localhost";
//$dbUser = "root";
//$dbPass = "...";
//$dbName = "perpustakaan";
 
//mysql_connect($dbHost, $dbUser, $dbPass);
//mysql_select_db($dbName);
include "config/koneksi.php";
 
echo "<h1>Restore Database PSB</h1>";
 
echo "DB Name: ".$dbName;
 
// form upload file dumo
echo "<form enctype='multipart/form-data' method='post' action='".$_SERVER['PHP_SELF']."?op=restore'>";
echo "<input type='hidden' name='MAX_FILE_SIZE' value='20000000'>
      <input name='datafile' type='file'>
      <input name='submit' type='submit' value='Restore'>";
echo "</form>";
 
// proses restore data
if ($_GET['op'] == "restore")
{
  // baca nama file
  $fileName = $_FILES['datafile']['name'];
 
  // proses upload file
  move_uploaded_file($_FILES['datafile']['tmp_name'], $fileName);
 
  // membentuk string command untuk restore
  // di sini diasumsikan letak file mysql.exe terletak di direktori C:\AppServ\MySQL\bin
  $string = "C:\xampp\mysql\bin\mysql -u".$dbUser." -p".$dbPass." ".$dbName." < ".$fileName;
 
  // menjalankan command restore di shell via PHP
  exec($string);
 
  // hapus file dump yang diupload
  unlink($fileName);
}
 
?>