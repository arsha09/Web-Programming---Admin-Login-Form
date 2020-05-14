<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang!</title>
	<style type="text/css">
		.tombol2 {
			width: 80px;
			display: inline-block;
			font-size: 12px;
			font-weight: bold;
			cursor: pointer;
			text-align: center;
			text-decoration: none;
			outline: none;
			background: tomato;
			color: #fff;
			border: 0;
			border-radius: 6px;
			padding: 7px 7px 7px 7px;
			margin-left: 20px;
			}

	body{
		background-image:url(gbr_bg_index.jpg);
		background-size:100%;
		padding-left: 0px;

		}
	header {
	    background:#128f8f;
	    padding: 10px;
	    margin: 0px 0px 0px 0px;
		}

	</style>
</head>
<body>
	<header style="color: #fff; text-align: right; font-family: sans-serif;">
	<table>
		<tr>
		<td style="text-align: left;width: 760px;"><img src="gbr_logo2.png" width="150"></td>
		<td style="text-align: right;">Selamat Datang di Halaman Admin :  </td>
		<td style="padding-right: 8px;padding-left: 15px;"><img src="gbr_avatar.png" width="30"></td>
		<td>
<?php 
//include '../config.php';
session_start();

if ($_SESSION['status']!='login') {
	header("location:../index.php");
}
echo "".$_SESSION['username'];
?>

		<button class="tombol2"><a href="logout.php" style="color: #fff;text-decoration: none;">LOGOUT</a></button>
		</td>
		</tr>
	</table>
	</header>
</body>
</html>