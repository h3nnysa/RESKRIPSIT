
<html>
<script type="text/javascript" src=".\jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
	mode : "exact",
	elements : "elm2",
	theme : "advanced",
	skin : "o2k7",
	skin_variant : "silver",
	plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups",
	
	theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : true,
	
	template_external_list_url : "lists/template_list.js",
	external_link_list_url : "lists/link_list.js",
	external_image_list_url : "lists/image_list.js",
	media_external_list_url : "lists/media_list.js",
	
	template_replace_values : {
		username : "Some User",
		staffid : "991234"
	}
	});	
</script>

<?php 
require 'inc/koneksi.php';

if (isset($_POST['simpan'])){
	$title=ucwords($_POST['title']);
	$content=$_POST['content'];
	$author=$_POST['author'];
	$tanggal=date("Y-m-s");
	if(empty($title) || empty($content) || empty($tanggal)){

	?><center><font color="red">Data yang Anda inputkan belum lengkap. SILAHKAN ULANGI :)<a href="home.php?page=editorteks"></a></font><?php

}else{

	$query=mysql_query("insert into t_artikel values('','$title','$content', '$author', NOW(),'')");
	
	if($query){
		echo "<script>window.location.href = 'home.php?page=editorteks&message=success';</script>";
	}else{
		echo "Gagal input data";
		echo mysql_error();
	}
	
}
   
}

if (isset($_POST['update'])){
	$idArtikel		= $_POST['idArtikel'];
	$author    		= $_POST['author'];
	$title    		= $_POST['title'];
	$content   		= $_POST['content'];
	    
    $edsql=  mysql_query("UPDATE `sipadu`.`t_artikel` SET idArtikel='$idArtikel', author='$author', title='$title', content='$content' WHERE `t_artikel`.`idArtikel` = '$idArtikel';") or die(mysql_error());
    if ($edsql){
		  echo "<script>window.location.href = 'home.php?page=artikel';</script>";
	}else{
	
	}	    
}

if ($_GET['aksi']=="del"){
	$idArtikel		= $_GET['idArtikel'];
	$delsql = mysql_query("DELETE FROM t_artikel WHERE idArtikel='$idArtikel'");
	if ($delsql){
		  echo "<script>window.location.href = 'home.php?page=artikel';</script>";	
	}else{
	
	}
}
?>
<title>Form Editor</title>
<h4><u><center>MENAMBAH INFORMASI DATA ARTIKEL</u></center></h4>
<body onLoad="document.login.userid.focus();">
	<?php 
	if (!empty($_GET['message']) && $_GET['message'] == 'success') {
		echo '<center>Berhasil Menambah Data Baru </center>';
	}
	?>
    <form action="" id="form" method="post">
	<input type="hidden" name="idArtikel" value="<?php 
			if (isset($_GET['aksi'])=="edit"){
			$idArtikel 	= $_GET['idArtikel'];
			$qedit	= mysql_query("SELECT * from t_artikel WHERE idArtikel='$idArtikel'");
			$redit	= mysql_fetch_assoc($qedit); echo $idArtikel;
			$idArtikel	= $redit['idArtikel'];
			$author	= $redit['author'];
			$title	= $redit['title'];
			$content	= $redit['content'];}?>">
			  
    <table width="637" border="0" align="center" cellpadding="0" cellspacing="0">
    
	<tr>
      <td height="30"><strong>Author</strong></td>
    </tr>
    <tr>
    <td width="67%" height="30"><font face="Times New Roman" size="2">
    <input type="text" name="author"/ size="30" value="<?php echo $author;?>" ></font></td>
    </tr>
	
	<tr>
      <td height="30"><strong>Judul Artikel</strong></td>
    </tr>
    <tr>
    <td width="67%" height="30"><font face="Times New Roman" size="2">
    <input type="text" name="title"/ size="40" value="<?php echo $title;?>"></font></td>
    </tr>
    
    <tr>
    <td width="67%" height="30"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><em>(Gunakan editor untuk mengedit tulisan)</em></font></td>
    </tr>
    
    <tr>
    <td width="67%" height="182"><font face="Times New Roman" size="2">
    <textarea name="content" cols="60" rows="25" id='elm2'><?php echo $content;?></textarea></font></td>
    </tr> 
    
    <tr>
    <td>&nbsp;</td>
    </tr>
    
    <tr>
    <td width="67%">
	<?php if (isset($_GET['aksi'])=='edit'){
				echo '<input class="button" type="submit" value="Simpan" name="update" />';
				}else{
				echo '<input class="button" type="submit" value="Tambahkan" name="simpan" />';}
			?>
    <input type="button" name="batal" value="Batal" onClick="location.replace('home.php?page=editorteks');" /></td>
    </tr>
    </table>
    </form>					
			

</body>
</html>


