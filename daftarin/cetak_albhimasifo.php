<!DOCTYPE html>
<html>
<head>
	<title> daftar.in cetak data pendaftar anggota luar biasa Himasifo </title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .warning {
            color: red;
        }
        .main {
            font-weight: bold; font-size: 40px; font-family: arial; color: black;
        }
        .main1 {
            font-weight: bold; font-size: 40px; font-family: arial; color: black;
        }
        body {
            background-color: #1e90ff;
        }       
        header {
            background-color: #1e90ff;
        }
        header h2 {
            color: black;
            font-family: 'Helvetica Neue', sans-serif;
            font-size: 60px;
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
            text-align: center;
            opacity: 80%;
        }
        .navigasi{
            background-color: white;
            color: black;
            opacity: 85%;
            font-family: 'Verdana', sans-serif;
            font-weight: bold;
            font-size: 15px;
        }      
        .navigasi ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }       
        .navigasi > ul > li {
            float: left;
        }   
        .navigasi li a {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }         
        .navigasi li a:hover{
            background-color: black;
            color: white;
        }         
        li.dropdown {
            display: inline-block;
        }        
        .dropdown:hover .isi-dropdown {
            display: block;
        }        
        .isi-dropdown {
            position: absolute;
            display: none;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .isi-dropdown a {
            background-color: white;
            color: black;
            font-size: 15px;
        }   
        .isi-dropdown a:hover {
            color: white;
            background-color: black;
        }
        footer {
            clear: both;
            background-color: #1e90ff;
            color: black;
            padding-right: 13.5%;
            padding-left: 26.5%;
            font-family: 'Verdana', sans-serif;
            font-size: 14px;
        }
    </style>
<?php
$servername = "localhost";
$username = "root";
$dbname = "daftarin";

include "koneksi_cetak.php";

$sql = "SELECT * FROM anggota_hima ORDER BY id_ahima;";
$query = mysqli_query($koneksi,$sql) or die ("Proses cetak gagal");
?>
</head>
<body>
    <br>
    <header align = "center">
        <h2><img src="sip.jpg" height="70px" width="120">daftar.in</h2>
    </header>
    <br>
    <div class="navigasi">
        <ul>
        	<li><a href="cetak.php">MENU CETAK DATA</a></li>
            <li><a href="login.php">LOGOUT</a></li>
        </ul>
    </div>
<?php
echo "<br><br><br><h1 align=center style='font-weight: bold; font-size: 40px; font-family: arial; color: black;'> Cetak Data Pendaftar Anggota Luar Biasa HIMASIFO </h1> <br><br>
	<table width='50%' cellpadding='2' cellspacing='1' border='1.5' align=center style='background-color:white; font-size:13px;'>
	<tr>
		<th>NO</th>
		<th>Nama Lengkap</th>
		<th>Nama Panggilan</th>
		<th>NPM</th>
		<th>Angkatan</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Domisili</th>
		<th>Alamat KTP</th>
		<th>Agama</th>
		<th>Email</th>
		<th>Line</th>
		<th>No WhatsApp</th>
		<th>Keahlian</th>
		<th>Organisasi</th>
		<th>Prestasi</th>
		<th>Departemen 1</th>
		<th>Departemen 2</th>
		<th>Alasan Memilih Departemen </th>
		<th>Alasan Mendaftar HIMA</th>
	</tr>";

$no = 1;
	while ($hasil = mysqli_fetch_array($query)) {
		echo "<tr>
			<td>$hasil[id_ahima]</td>	
			<td>$hasil[nama_lengkap]</td>
			<td>$hasil[nama_panggilan]</td>
			<td>$hasil[npm]</td>
			<td>$hasil[angkatan]</td>
			<td>$hasil[jenis_kelamin]</td>
			<td>$hasil[tmp_lahir]</td>
			<td>$hasil[tgl_lahir]</td>	
			<td>$hasil[domisili]</td>
			<td>$hasil[alamat_ktp]</td>
			<td>$hasil[agama]</td>
			<td>$hasil[email]</td>
			<td>$hasil[id_line]</td>
			<td>$hasil[wa]</td>
			<td>$hasil[passion]</td>	
			<td>$hasil[organisasi]</td>
			<td>$hasil[prestasi]</td>
			<td>$hasil[dept1]</td>
			<td>$hasil[dept2]</td>
			<td>$hasil[alasan_dept]</td>
			<td>$hasil[alasan_hima]</td>
			</tr>";
	$no++;
	}
	echo "</table>";
?>
<br><br>
<center> Klik <a href="report_albhimasifo.php" style="color: white;"> Export to Excel </a> 
		untuk report data Pendaftar Anggota Luar Biasa HIMASIFO ke excel </center><br>
<center> Klik <a href="cetak.php" style="color: white;">Kembali</a> 
		untuk kembali ke halaman cetak data </center><br>
</body>
<br><br><br>
<footer>Diah Fatmawati, Tiara Karunia Miranti - Sistem Informasi UPN "Veteran" Jawa Timur || @copyright 2020</footer>
<br>
</html>