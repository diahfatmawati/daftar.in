<!DOCTYPE html>
<html lang="en">
<head>
    <title>daftar.in BLJ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .warning {
            color: red;
        }
        .main {
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
            margin-right: 30%;
            margin-left: 33%;
        }
        .baris2 {
            margin-right: 30%;
            margin-left: 33%;
        }
        .baris1 input {
            background-color: white;
            color: black;
            width: 500px;
            height: 70px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 80%;
            font-size: 16px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        .baris2 input {
            background-color: white;
            color: black;
            width: 500px;
            height: 70px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 80%;
            font-size: 16px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        .baris1 input:hover, .baris2 input:hover {
            color : white;
            background-color: black;
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
            <li><a href="menu.php">HOME</a></li>
            <li><a href="blj.php">BLJ</a></li>
            <li class="dropdown"><a href="himasifo.php">HIMASIFO</a>
                <ul class="isi-dropdown">
                    <li><a href="albhimasifo.php">ALB Himasifo</a></li>
                    <li><a href="panitiahimasifo panitia.php">Panitia Himasifo</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="iscom.php">ISCOM</a>
                <ul class="isi-dropdown">
                    <li><a href="pengurusiscom.php">Anggota ISCOM</a></li>
                    <li><a href="panitiaiscom.php">Panitia ISCOM</a></li>
                </ul>
            </li>
            <li><a href="saran.php">SARAN</a></li>
            <li><a href="tentangkami.php">TENTANG KAMI</a></li>
            <li><a href="home.php">KELUAR</a></li>
        </ul>
    </div>
<br><br><br><br><br><br><br>

<div class="baris1">
    <input type="button" value="Pendaftaran Pengurus ISCOM" onclick="window.location='pengurusiscom.php'"/>
</div>
<div class="baris2">
    <input type="button" value="Pendaftaran Panitia ISCOM" onclick="window.location='panitiaiscom.php'"/>
</div>

<br><br><br><br><br><br><br>
<footer>Diah Fatmawati, Tiara Karunia Miranti - Sistem Informasi UPN "Veteran" Jawa Timur || @copyright 2020</footer>
<br>
</body>
</html>