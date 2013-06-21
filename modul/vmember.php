

<title>Sistem Pakar</title>
                    <div>

                        <center>DATA MEMBER<center>

                    </div> <!-- End .content-box-header -->

 <p><table id="tablemn" >
	<thead >
		<th width="5%" >No.</th>
		<th width="20%">Nama</th>
		<th width="5%">Umur</th>
		<th width="10%">Pekerjaan</th>
		<th width="15%">Status</th>
		<th width="15%">Email</th>
		<th width="10%">Telepon</th>
		<th width="4%">Aksi</th>
	</thead>
	<tbody>
<?php
require 'inc/koneksi.php';
require 'inc/buatid.php';

$batas=10;
$halaman = $_GET['halaman'];
if(empty($halaman))
{
$posisi=0;
$halaman=1;
}
else
{
$posisi = ($halaman-1) * $batas;
}
$no=$posisi+1;
$sql=  mysql_query("SELECT * FROM t_pasien ORDER BY ids ASC limit $posisi,$batas") or die (mysql_query());
if (mysql_num_rows($sql) == 0){
	echo '<tr><td colspan=4><center><br/><h4>Tidak ada data</h4></center></td></tr>';
	}else{

while ($row = mysql_fetch_array($sql)) {
     echo '<tr>
			<td>'.$no.'</td>
			<td>'.$row['nama'].'</td>
			<td>'.$row['umur'].'</td>
			<td>'.$row['pek'].'</td>
			<td>'.$row['status'].'</td>
			<td>'.$row['email'].'</td>
			<td>0'.$row['telepon'].'</td>
			<td>
            <a href="home.php?page=e_member&aksi=del&ids='.$row['ids'].'" onclick="return confirm(\'Apakah kamu yakin ingin menghapus '.$row['t_pasien'].' ?\');" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a></td></tr>';
$no++;
			}
}


?>
	</tbody>
</table><br/>
<?php
$file="?page=v_pasien";

$tampil2="SELECT * FROM t_pasien ORDER BY ids ASC";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);

$jmlhalaman=ceil($jmldata/$batas);


//link ke halaman sebelumnya (previous)
if($halaman > 1)
{
$previous=$halaman-1;
echo "<A HREF=$file&&halaman=1><< First</A> | 
<A HREF=$file&&halaman=$previous>< Previous</A> | ";
}
else
{ 
echo "<< First | < Previous | ";
}

$angka=($halaman > 3 ? " ... " : " ");
for($i=$halaman-2;$i<$halaman;$i++)
{
if ($i < 1) 
continue;
$angka .= "<a href=$file&&halaman=$i>$i</A> ";
}

$angka .= " <b>$halaman</b> ";
for($i=$halaman+1;$i<($halaman+3);$i++)
{
if ($i > $jmlhalaman) 
break;
$angka .= "<a href=$file&&halaman=$i>$i</A> ";
}

$angka .= ($halaman+2<$jmlhalaman ? " ... 
<a href=$file&&halaman=$jmlhalaman>$jmlhalaman</A> " : " ");

echo "$angka";

//link kehalaman berikutnya (Next)
if($halaman < $jmlhalaman)
{
$next=$halaman+1;
echo " | <A HREF=$file&&halaman=$next>Next ></A> | 
<A HREF=$file&&halaman=$jmlhalaman>Last >></A> ";
}
else
{ 
echo " | Next > | Last >>";
}
echo "<p><font color=red>Total Member : <b>$jmldata</b> Member</font></p>";
echo "$nama";
?>




                

