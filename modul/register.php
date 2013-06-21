

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Form Register</title>
	
	<!-- Include CSS -->
	<link rel="stylesheet" href="css/register.css"/>
	<link rel="stylesheet" href="css/saran.css"/>
	
</head>
<body>
	
	<form class="register_form" action="index.php?page=reg" id="form" method="post">
		<ul>
			<li>
				<center>FORM PENDAFTARAN</center>
				
			</li>
			<li>
				<label for="name">Nama :</label>
				<input type="text" name="xnama"  placeholder="" required />
				<span class="form_hint">inputkan nama lengkap</span>
			</li>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="xusername" placeholder="" required  />
				<span class="form_hint">Inputkan username</span>
			</li>
			<li>
				<label for="umur">Umur :</label>
				<input type="text" name="xumur" placeholder="" required  />
				<span class="form_hint">Inputkn umur</span>
			</li>
			
			<li>
				<label for="email">E-mail :</label>
				<input type="email" name="xemail" placeholder="" required  />
				<span class="form_hint">format maher@yahoo.co.id</span>
			</li>
			<li>
				<label for="email">Telepon :</label>
				<input type="text" name="xtelepon" placeholder="" required  />
				<span class="form_hint">Inputkan 085729001164</span>
			</li>
			
			<li>
			  
				<button type="submit" name="simpan">Submit</button>
			  
			</li>
		</ul>
	</form>
	
</body>
</html>