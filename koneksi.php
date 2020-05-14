<?php
$servername="localhost";
$username="root";
$password="";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error) {
	die("Koneksi error : " .$conn->connect_error);
}

echo "Koneksi Sukses";

?>