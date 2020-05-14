<?php 

include 'registrasi.php';

$servername="localhost";
$username="root";
$password="";
$database="dbuts";

$conn = new mysqli($servername,$username,$password,$database);

if (isset($_POST["register"])) {
	
	$username=strtolower(stripslashes($_POST["username"]));
	$password=mysqli_escape_string($conn, $_POST["password"]);
}

//untuk enkripsi 
//$pwd=password_hash($password, PASSWORD_DEFAULT);


$cekuser=mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
if (mysqli_fetch_assoc($cekuser)) {
	echo "<script>
	alert('Username sudah pernah dipakai')
	</script>";
	return false;
}


$sql=mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')");

if($sql) {
	header("Location:index.php");
}else {
	mysqli_error($conn);
}

 ?>