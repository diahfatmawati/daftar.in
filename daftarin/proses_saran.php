<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftarin";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
	die("Connection failed : " .mysqli_connect_error());
	}

if (!empty($nama) && !empty($angkatan) && !empty($saran)) {
	$sql = "INSERT INTO saran (nama,angkatan,saran) VALUES ('$nama','$angkatan','$saran')";

if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Sukses')</script>";
} else {
	echo "<script>alert('Gagal')</script>";
}
}
mysqli_close($conn);
?>