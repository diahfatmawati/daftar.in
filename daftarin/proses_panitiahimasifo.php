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


if (!empty($nama) && !empty($npm) && !empty($angkatan) && !empty($jenis_kelamin) && !empty($domisili) && !empty($email) && !empty($id_line) && !empty($wa) && !empty($divisi1) && !empty($divisi2) && !empty($alasan)) {
	$sql = "INSERT INTO panitia_hima (nama, npm, angkatan, jenis_kelamin,  domisili, email, id_line, wa, divisi1, divisi2, alasan) VALUES ('$nama','$npm','$angkatan','$jenis_kelamin', '$domisili',  '$email', '$id_line', '$wa','$divisi1', '$divisi2','$alasan')";

if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Sukses')</script>";
} else {
	echo "<script>alert('Gagal')</script>";
}
}
mysqli_close($conn);
?>