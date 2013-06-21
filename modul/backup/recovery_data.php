<html>
<head>
	<title>Recovery Database - Ri32.Wordpress.Com</title>
</title>
</title>
<body>


<form enctype="multipart/form-data" action="?page=page/backup/recovery_data" method="post">
	<p align="center"><em>Halaman ini digunakan untuk <strong><a href="?page=page/backup/index">BACKUP</a></strong> dan <strong><a href="page/backup/recovery_data">RESTORE</a></strong> semua data yang ada didalam database &quot;<strong>sipadu</strong>&quot;.</em></p>
	<br><p align="center">
	<tr><td >File Backup Database (*.sql) <input type="file" name="datafile" size="30" id="gambar" /></td></tr></p>
	<br><p align="center"><tr><td><input type="submit" onclick="return confirm('Apakah Anda yakin akan restore database?')" name="restore" value="Restore Database" /></td>
	</tr>
	</p>
</form>


<?php
if(isset($_POST['restore'])){
	$koneksi=mysql_connect("localhost","root","");
	mysql_select_db("sipadu",$koneksi);
	
	$nama_file=$_FILES['datafile']['name'];
	$ukuran=$_FILES['datafile']['size'];
	
	//periksa jika data yang dimasukan belum lengkap
	if ($nama_file=="")
	{
		echo "Fatal Error";
	}else{
		//definisikan variabel file dan alamat file
		$uploaddir='./modul/backup/restore/';
		$alamatfile=$uploaddir.$nama_file;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile))
		{
			
			$filename = './modul/backup/restore/'.$nama_file.'';
			
			// Temporary variable, used to store current query
			$templine = '';
			// Read in entire file
			$lines = file($filename);
			// Loop through each line
			foreach ($lines as $line)
			{
				// Skip it if it's a comment
				if (substr($line, 0, 2) == '--' || $line == '')
					continue;
			 
				// Add this line to the current segment
				$templine .= $line;
				// If it has a semicolon at the end, it's the end of the query
				if (substr(trim($line), -1, 1) == ';')
				{
					// Perform the query
					mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
					// Reset temp variable to empty
					$templine = '';
				}
			}
			echo "<center>Berhasil Restore Database, silahkan di cek.</center>";
		
		}else{
			//jika gagal
			echo "Proses upload gagal, kode error = " . $_FILES['location']['error'];
		}	
	}

}else{
	unset($_POST['restore']);
}
?>

</body>
</head>

	