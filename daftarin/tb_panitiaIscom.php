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

$sql = "CREATE TABLE panitia_iscom ( 
		id_piscom int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
		nama varchar(50) NOT NULL,
		npm varchar(30) NOT NULL,
		angkatan int(11) NOT NULL,
		jenis_kelamin varchar(20) NOT NULL,
		domisili varchar(40) NOT NULL,
		email varchar(40) NOT NULL,
		id_line varchar(20) NOT NULL,
		wa varchar(30) NOT NULL,
		divisi1 varchar(50) NOT NULL,
		divisi2 varchar(50) NOT NULL,
		alasan text NOT NULL)";
	
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>