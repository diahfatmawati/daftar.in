<!DOCTYPE html>
<html lang="en">
<head>
    <title>daftar.in cetak data pendaftaran</title>
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
        .baris1 {
            margin-right: 10%;
            margin-left: 20%;
        }
        .baris1 input {
            background-color: black;
            color: white;
            width: 400px;
            height: 60px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 80%;
            font-size: 14px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
        .baris2 {
            margin-right: 10%;
            margin-left: 20%;
        }
        .baris2 input {
            background-color: black;
            color: white;
            width: 400px;
            height: 60px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 80%;
            font-size: 14px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
        .baris3 {
            margin-right: 10%;
            margin-left: 35%;
        }
        .baris3 input {
            background-color: black;
            color: white;
            width: 400px;
            height: 60px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 80%;
            font-size: 14px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
        .baris1 input:hover, .baris2 input:hover, .baris3 input:hover{
            color : white;
            background-color: #00bfff;
            opacity: 50%;
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
</head>
<body>
    <br>
    <header align = "center">
        <h2><img src="sip.jpg" height="70px" width="120">daftar.in</h2>
    </header>
    <br>
    <div class="navigasi">
        <ul>
            <li><a href="login.php">LOGOUT</a></li>
        </ul>
    </div>
<br><br><br>
<label class="main1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cetak Data Mahasiswa </label>
<br><br>

<div class="baris1">
    <input type="button" value="Data Pendaftar Anggota Luar Biasa HIMASIFO" onclick="window.location='cetak_albhimasifo.php'"/>
    <input type="button" value="Data Pendaftar Panitia Program Kerja HIMASIFO" onclick="window.location='cetak_panitiahimasifo.php'"/>
</div>
<div class="baris2">
    <input type="button" value="Data Pendaftar Pengurus ISCOM" onclick="window.location='cetak_pengurusiscom.php'"/>
    <input type="button" value="Data Pendaftar Panitia ISCOM" onclick="window.location='cetak_panitiaiscom.php'"/>
</div>
<div class="baris3">
    <input type="button" value="Data Pendaftar Delegasi BLJ" onclick="window.location='cetak_blj.php'"/>
</div>
<br><br><br>
<footer>Diah Fatmawati, Tiara Karunia Miranti - Sistem Informasi UPN "Veteran" Jawa Timur || @copyright 2020</footer>
<br>
</body>
</html>