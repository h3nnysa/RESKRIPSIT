
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sistem Pakar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.custom.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.custom.min.js"></script>
</head>
<body>
<div id="topPan"> <a href=""><img src="images/lolo.png" title="" alt="" border="0"  class="logo"/></a>
  <div id="topimagePan"><img src="images/g2.jpg" alt="" /></div>
  
  <ul>
    <li> <a href="index.php?page=homeart">home</a></li>
    <li> <a href="index.php?page=help">Help</a></li>
    <li><a href="index.php?page=profil">about us</a></li>
    <li><a href="index.php?page=register">Register</a></li>
    <li><a href="#">Glosarium</a></li>
    
  </ul>
</div>
<div id="bodyPan">
  <div id="leftPan">
    <?php  
                $page=$_GET['page'];
                if(isset($_GET['page'])){
					include 'modul/'.$page.'.php';
				}else{
					include 'modul/homeart.php'; 
				}
				
				?>
                
    
  </div>
  <BR>
  <div id="rightPan">
    <form action="log.php?op=in" method="post" class="form1">
      <h2>Member Login</h2>
	
        <div>
				<?php 
		//kode php ini kita gunakan untuk menampilkan pesan eror
		if (!empty($_GET['error'])) {
			if ($_GET['error'] == 1) {
				echo 'Username dan Password belum diisi!';
			} else if ($_GET['error'] == 2) {
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username belum diisi!';
			} else if ($_GET['error'] == 3) {
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password belum diisi!';
			} else if ($_GET['error'] == 4) {
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akun Anda belum terdaftar!';
			} else {
				echo '';
			}
		}
		?>
			    </div>
        	
      <label>Name:</label>
      <input type="text" name="userid" placeholder="username" <?php echo $userid;?>/>
      <label>Passward:</label>
      <input type="password" name="psw" placeholder="password" <?php echo $psw;?>/>
      <label class="label1"></label>
      <input name="login" type="submit" class="botton" id="GO" value="Sign" />  
    </form>
    <h3>Daftar Penyakit</h3>
    <ul>
      <li><a href='index.php?page=artikel1'>Kanker Servik</a></li>
      <li><a href='index.php?page=artikel2'>Kanker Endometrium</a></li>
      <li><a href='index.php?page=artikel3'>Korpus Uteri</a></li>
      <li><a href="index.php?page=artikel4">Kanker Ovarium</a></li>
      <li><a href="index.php?page=artikel5">Kanker Vulva</a></li>
	  <li><a href="index.php?page=artikel6">Sarkoma Uteri</a></li>
      <li><a href="index.php?page=artikel7">Kanker Vagina</a></li>
      <li><a href="index.php?page=artikel8">Kanker Tuba Fallopii</a></li>
    </ul>
	<!--
    <div id="rightform2Pan">
      <form action="" method="get" class="form2">
        <h2>Pencarian</h2>
        <label></label>
        <input name="" type="text" />
        
        <input name="search" type="submit"  class="search" id="search" value="CARI"/>
      </form>
    </div>-->
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
