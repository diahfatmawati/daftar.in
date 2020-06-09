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

if (!empty($nama_lengkap) && !empty($nama_panggilan) && !empty($npm) && !empty($angkatan) && !empty($jenis_kelamin) && !empty($tmp_lahir)&& !empty($tgl_lahir) && !empty($domisili) && !empty($alamat_ktp)&& !empty($agama) && !empty($email) && !empty($id_line) && !empty($wa) && !empty($passion) && !empty($organisasi) && !empty($prestasi) && !empty($dept1) && !empty($dept2) && !empty($alasan_dept) && !empty($alasan_hima)) {
	$sql = "INSERT INTO anggota_hima (nama_lengkap, nama_panggilan, npm, angkatan, jenis_kelamin, tmp_lahir, tgl_lahir,  domisili, alamat_ktp, agama, email, id_line, wa, passion, organisasi, prestasi, dept1, dept2, alasan_dept, alasan_hima) VALUES ('$nama_lengkap','$nama_panggilan','$npm','$angkatan','$jenis_kelamin', '$tmp_lahir', '$tgl_lahir', '$alamat_ktp','$agama','$domisili','$email','$id_line','$wa','$passion','$organisasi','$prestasi','$dept1', '$dept2','$alasan_dept','$alasan_hima')";

if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Sukses')</script>";
} else {
	echo "<script>alert('Gagal')</script>";
}
}
mysqli_close($conn);
?>