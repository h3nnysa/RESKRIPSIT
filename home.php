<?

session_start();
if(!isset($_SESSION['userid'])){
	echo "<script language=Javascript>
	alert('Anda tidak berhak untuk mengakses laman ini, Silahkan login terlebih dahulu');
	document.location='index.php';
	</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sistem Pakar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/tstyle.css"/>
        <link rel="stylesheet" href="css/tabel.css"/>

</head>
<body>
<div id="topPan"> <a href="#"><img src="images/lolo.png" title="Brain Tech" alt="" width="" height="" border="0"  class="logo"/></a>
  <div id="topimagePan"><img src="images/g2.jpg" alt="" /></div>
  <ul>
    <li><a href="home.php?page=home">Home</a></li>
    <li><a href="home.php?page=profil">About us</a></li>
    <li><a href="#">Glosarium</a></li>
    <li><a href=log.php?op=out>Logout</a></li>
  </ul>
</div>

<div id="bodyPan">
  <div id="leftPan">
  
    <?php  
                $page=$_GET['page'];
                if(isset($_GET['page'])){
					include 'modul/'.$page.'.php';
				}else{
					include 'modul/home.php'; 
				}
				
				?>       
    
  </div>
  <div id="rightPan">
 
<?php
		if ($_SESSION['level']==10){
		include "menupas.php";
		}
		if ($_SESSION['level']==30){
		include "menupakar.php";
		}
		else if ($_SESSION['level']==50){
		include "menuadm.php";
		}
?>

  </div>
</div>
<div id="bodyBottomPan">

  
</div>
<div id="footerPan">
  <ul>
    <li>SISTEM PAKAR -</li>
    <li> - Maherni Ngadiyaningsih 08</li>
    <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTIF UIN Sunan Kalijaga Yogyakarta
	</li>
  </ul>
</div>
</body>
</html>
