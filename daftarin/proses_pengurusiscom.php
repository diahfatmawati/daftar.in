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


if (!empty($nama_lengkap) && !empty($nama_panggilan) && !empty($npm) && !empty($angkatan) && !empty($jenis_kelamin) && !empty($tmp_lahir)&& !empty($tgl_lahir) && !empty($domisili) && !empty($alamat_ktp)&& !empty($agama) && !empty($email) && !empty($id_line) && !empty($wa) && !empty($passion) && !empty($organisasi) && !empty($prestasi) && !empty($div1) && !empty($div2) && !empty($alasan_div) && !empty($alasan_iscom)) {
	$sql = "INSERT INTO anggota_iscom (nama_lengkap, nama_panggilan, npm, angkatan, jenis_kelamin, tmp_lahir, tgl_lahir,  domisili, alamat_ktp, agama, email, id_line, wa, passion, organisasi, prestasi, div1, div2, alasan_div, alasan_iscom) VALUES ('$nama_lengkap','$nama_panggilan','$npm','$angkatan','$jenis_kelamin', '$tmp_lahir', '$tgl_lahir', '$alamat_ktp','$agama','$domisili','$email','$id_line','$wa','$passion','$organisasi','$prestasi','$div1', '$div2','$alasan_div','$alasan_iscom')";

if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Sukses')</script>";
} else {
	echo "<script>alert('Gagal')</script>";
}
}
mysqli_close($conn);
?>