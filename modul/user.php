
<?php
require "inc/koneksi.php";
require "script.php";
if(empty($no))
$posisi=0;
$no=$posisi+1;
$que = mysql_query("SELECT * FROM t_user ");
?>		
 <h3 align="center"><br> &nbsp &nbsp .: DATA USER KESELURUHAN:.</h3><br>           
	<div class="demo_jui">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    	<tr>
            
            <td align="center">No</td>
            <td align="center">Username</td>
			<td align="center">Password</td>
			<td align="center">Level</td>
			<td align="center">Create Date</td>
			<td align="center">Last Login</td>
			<td align="center">Detail</td>
			
		
        </tr>
    </thead>

	<?php
	while ($konten = mysql_fetch_array($que)){
	?>
		<tr class="gradeC">
						
			<td align="center"><?php echo $no; ?></td>
			<td align="justify"><?php echo $konten['userid']; ?></td>
			<td align="justify"><?php echo $konten['password']; ?></td>
			<td align="justify"><?php echo $konten['level']; ?></td>
			<td align="justify"><?php echo $konten['create_date']; ?></td>
			<td align="justify"><?php echo $konten['last_login']; ?></td>
			<td align="center">
			<a href="home.php?page=user&aksi=del&userid=<?php echo $konten['userid'];?>" onclick="return confirm('Anda yakin ingin menghapus?');"> <img src="images/icons/cross.png" alt="" title="Delete" border="0" /></a>
		<?php
		$no++;
		?>		
		</td>
		</tr>
		
	<?php
		}
	?>	
	</table>
	</div>
<?php 
require 'inc/koneksi.php';

if ($_GET['aksi']=="del"){
	$userid	= $_GET['userid'];
	$delsql = mysql_query("DELETE FROM t_user WHERE userid='$userid'");
	if ($delsql){
		  echo "<script>window.location.href = 'home.php?page=user';</script>";	
	}else{
	
	}
}
?>
   