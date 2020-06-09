<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftarin";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()){
	echo "Gagal Terhubung dengan database: ".mysqli_connect_error();
	exit();
}
?>