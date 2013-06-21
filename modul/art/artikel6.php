<?php
// lakukan koneksi ke mysql
include "inc/koneksi.php";
?>


<?php
// query untuk membaca data artikel yg diurutkan berdasarkan id artikel
$query = "SELECT * FROM t_artikel where title='vagina'";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
  // tampilkan title artikel
  echo "<h3>".$data['title']."</h3>";

  // tampilkan tanggal pub, author dan berapa kali dibaca
  echo "<p><small>Tgl Post: ".$data['datePub'].". Posted by: ".$data['author'].". Dibaca: ".$data['views']." kali</small></p><hr>";

  // lakukan exploding terhadap isi artikel berdasarkan string <!--more-->
  $pecah = explode("<!--more-->", $data['content']);

  // excerpt adalah elemen pertama (index ke-0) dari array hasil exploding
  $excerpt = $pecah[0];

  // tampilkan excerpt
  echo "<p>".$excerpt."</p>";

  // link untuk baca selengkapnya. Gunakan id artikel sebagai parameternya
  echo "<p><a href='home.php?page=vartikel&id=".$data['idArtikel']."'>Baca selengkapnya...</a></p>";
  echo "<hr>";
}
?>