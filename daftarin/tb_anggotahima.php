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
	
$sql = "CREATE TABLE anggota_hima (
	id_ahima INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	nama_lengkap VARCHAR(50) NOT NULL,
	nama_panggilan VARCHAR(30) NOT NULL,
	npm VARCHAR(30) NOT NULL,
	angkatan INT(11) NOT NULL,
	jenis_kelamin VARCHAR(20) NOT NULL,
	tmp_lahir VARCHAR(40) NOT NULL,
	tgl_lahir VARCHAR(40) NOT NULL,
	domisili VARCHAR(40) NOT NULL,
	alamat_ktp VARCHAR(50) NOT NULL,
	agama VARCHAR(30) NOT NULL,
	email VARCHAR(40) NOT NULL,
	id_line VARCHAR(20) NOT NULL,
	wa VARCHAR(30) NOT NULL,
	passion VARCHAR(50) NOT NULL,
	organisasi TEXT NOT NULL,
	prestasi TEXT NOT NULL,
	dept1 VARCHAR(50) NOT NULL,
	dept2 VARCHAR(50) NOT NULL,
	alasan_dept TEXT NOT NULL,
	alasan_hima TEXT NOT NULL)";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>