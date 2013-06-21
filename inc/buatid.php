<?php
function buatID($tabel, $inisial){
    $struktur = mysql_query("select * from $tabel") or die("query tidak dapat dijalankan!");
    $field = mysql_field_name($struktur,0);
    $panjang = mysql_field_len($struktur,0);
    $row = mysql_num_rows($struktur);
    
    $panjanginisial = strlen($inisial);
    $awal = $panjanginisial + 1;
    $bnyk = $panjang-$panjanginisial;
    
    if ($row >= 1){
      $query = mysql_query("select max(substring($field,$awal,$bnyk)) as max from $tabel") or die("query tidak dapat dijalankan!");
      $hasil = mysql_fetch_assoc($query);
      $angka = intval($hasil['max']);
    }
    else{
      $angka = 0;
    }
    
    $angka++;
    $tmp= "";
    for ($i=0; $i < ($panjang-$panjanginisial-strlen($angka)) ; $i++){
      $tmp = $tmp."0";
    }
    //return hasil generate ID
    return strval($inisial.$tmp.$angka);
 }

?>