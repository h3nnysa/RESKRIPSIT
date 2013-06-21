<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("sipadu");//sesuaikan dengan nama database anda
//tangkap data dari form login
$userid = $_POST['userid'];
$psw = $_POST['psw'];
$op = $_GET['op'];

if($op=="in"){
		//cek data yang dikirim, apakah kosong atau tidak
	if (empty($userid) && empty($psw)) {
		//kalau username dan password kosong
		header('location:index.php?error=1');
		break;
	} else if (empty($userid)) {
		//kalau username saja yang kosong
		header('location:index.php?error=2');
		break;
	} else if (empty($psw)) {
		//kalau password saja yang kosong
		header('location:index.php?error=3');
		break;
	}

    $cek = mysql_query("SELECT * FROM t_user WHERE userid='$userid' AND password='$psw'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['userid'] = $c['userid'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="10"){
            header("location:home.php");
        }
		if($c['level']=="30"){
            header("location:home.php");
        }
		else if($c['level']=="50"){
            header("location:home.php");
        }
    }else{
			header('location:index.php?error=4');
         		
    }
}else if($op=="out"){
    unset($_SESSION['userid']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>