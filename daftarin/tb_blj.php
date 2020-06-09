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

$sql = "CREATE TABLE blj (
	id_blj int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	nama_lengkap varchar(50) NOT NULL,
	nama_panggilan varchar(30) NOT NULL,
	npm varchar(30) NOT NULL,
	angkatan int(11) NOT NULL,
	jenis_kelamin varchar(20) NOT NULL,
	tmp_lahir varchar(40) NOT NULL,
	tgl_lahir int(40) NOT NULL,
	domisili varchar(40) NOT NULL,
	alamat_ktp varchar(50) NOT NULL,
	agama varchar(30) NOT NULL,
	email varchar(40) NOT NULL,
	id_line varchar(20) NOT NULL,
	wa varchar(30) NOT NULL,
	passion varchar(50) NOT NULL,
	organisasi text NOT NULL,
	prestasi text NOT NULL,
	alasan text NOT NULL)";
	
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>