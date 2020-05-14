<!DOCTYPE html>
<head>
	<title>Membuat Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
<br>
<br>
<br>
<br>
	<center><img src="pict_logo1.png" width="300"></center>
	<center><h3 style="margin-bottom: 0px;">FORM LOGIN ADMIN</h3></center>
<br>
<div class="login">
	<form method="post" action="login.php" onsubmit="return validasi()">
		<div>
			<label>Username :</label>
			<input type="text" name="username" id="username">
		</div>
		<div>
			<label>Password :</label>
			<input type="password" name="password" id="password">
		</div>
			<button class="tombol" type="submit" name="login">LOGIN</button>
	</form>
	Belum punya akun? <a href="registrasi.php">Registrasi</a>
</div>

<script type="text/javascript">
	function validasi() {
		var Username=document.getElementById("username").value;
		var Password=document.getElementById("password").value;

		if(Username!=""&&Password!="") {
			return true;
		}
		else {
			alert('Tolong diisi username dan passwordnya')
			return false;
		}
	}
</script>
</body>
</html>

