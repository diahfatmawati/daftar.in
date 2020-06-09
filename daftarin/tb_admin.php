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

$sql = "CREATE TABLE admin ( 
	id INT(11) AUTO_INCREMENT PRIMARY KEY, 
	email VARCHAR(50) NOT NULL, 
	pass VARCHAR(20) NOT NULL)";
	
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>