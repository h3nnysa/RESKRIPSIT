

<title>ARTIKEL</title>

                    <div >

                        <center>DATA POSTINGAN ARTIKEL<center>

                    </div> <!-- End .content-box-header -->

<a href='?page=editorteks'><img id='icon' src='images/add.png' alt='tambah' title='tambah'></a>
 <p><table id="tablemn" >
	<thead >
		<th width="5%" >No.</th>
		<th width="20%">Author</th>
		<th width="35%">Judul Artikel</th>
		<th width="24%">Tanggal Post</th>
		<th width="8%">View</th>
		<th width="8%">Aksi</th>
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
$sql=  mysql_query("SELECT * FROM t_artikel ORDER BY idArtikel ASC limit $posisi,$batas") or die (mysql_query());
if (mysql_num_rows($sql) == 0){
	echo '<tr><td colspan=4><center><br/><h4>Tidak ada data</h4></center></td></tr>';
	}else{

while ($row = mysql_fetch_array($sql)) {
     echo '<tr>
			<td>'.$no.'</td>
			<td>'.$row['author'].'</td>
			<td>'.$row['title'].'</td>
			<td>'.$row['datePub'].'</td>
			<td>'.$row['views'].'</td>
			<td><a href="home.php?page=editorteks&aksi=edit&idArtikel='.$row['idArtikel'].'" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
            <a href="home.php?page=editorteks&aksi=del&idArtikel='.$row['idArtikel'].'" onclick="return confirm(\'Apakah kamu yakin ingin menghapus judul artkel '.$row['title'].' ?\');" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a></td></tr>';
$no++;
			}
}


?>
	</tbody>
</table><br/>
<?php
$file="?page=eartikel";

$tampil2="SELECT * FROM t_artikel ORDER BY idArtikel ASC";
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
echo "<p><font color=red>Total Postingan Artikel : <b>$jmldata</b> Artikel</font></p>";
echo "$nama";
?>



                       
                

