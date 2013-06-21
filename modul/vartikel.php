<?php
// lakukan koneksi ke mysql
include "inc/koneksi.php";

// baca id artikel dari parameter link 'Baca selengkapnya...' dari index.php
$id = $_GET['id'];

// update jumlah views (jumlah views bertambah 1 dari sebelumnya) dari artikel
$query = "UPDATE t_artikel SET views = views + 1 WHERE idArtikel = '$id'";
mysql_query($query);

// baca data artikel berdasarkan id nya
$query = "SELECT * FROM t_artikel WHERE idArtikel = '$id'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);

// tampilkan title artikel
echo "<h3>".$data['title']."</h3>";
// tampilkan tanggal pub, author, dan jumlah views
echo "<p><small>Tgl post: ".$data['datePub'].". Posted by: ".$data['author'].". Dibaca: ".$data['views']." kali</small></p><hr>";
// tampilkan isi artikel
echo "<p>".$data['content']."</p>";

?>