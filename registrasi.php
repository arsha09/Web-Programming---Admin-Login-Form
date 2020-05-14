<!DOCTYPE html>
<head>
	<title>Membuat Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<br>
<br>
<br>
<br>
	<center><img src="pict_logo1.png" width="300"></center>
	<center><h3 style="margin-bottom: 0px;">FORM REGISTRASI</h3></center>
<br>
<div class="login1">
	<form method="post" action="register.php" onsubmit="return validasi()">
		<div>
			<label>Username :</label>
			<input type="text" name="username" id="username" required>
		</div>
		<div>
			<label>Password :</label>
			<input type="password" name="password" id="password" required>
		</div>
		<div>
			<label>Konfirmasi Password :</label>
			<input type="password" name="password2" id="password2" required>
		</div>
			<button class="tombol1" type="submit" name="register">DAFTAR</button>
	</form>
	Sudah punya akun? <a href="index.php">Login</a>
</div>

<script type="text/javascript">
	function validasi() {
		var Username=document.getElementById("username").value;
		var Password=document.getElementById("password").value;
		var Password2=document.getElementById("password2").value;

		if(Password!=Password2) {
			alert('Password tidak sama')
			return false;
		}
		else {
			
			return true;
		}
	}
</script> 


</body>
</html>

