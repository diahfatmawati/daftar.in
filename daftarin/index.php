<!DOCTYPE html>
<html lang="en">
<head>
    <title>daftar.in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body {
            background-color: #1e90ff;
        }
        header {
            background-color: #1e90ff;
            padding : 10px;
        }
        header h2 {
            color: black;
            font-family: 'Helvetica Neue', sans-serif;
            font-size: 90px;
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
            text-align: center;
            opacity: 80%;
        }
        .baris1 {
            margin-right: 10%;
            margin-left: 45%;
        }
        .baris1 input {
            background-color: black;
            color: white;
            width: 100px;
            height: 50px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 80%;
            font-size: 20px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        .baris2 {
            margin-right: 10%;
            margin-left: 42.5%;
        }
        .baris2 input {
            background-color: black;
            color: white;
            width: 170px;
            height: 50px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 80%;
            font-size: 20px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        .baris1 input:hover, .baris2 input:hover{
            color : white;
            background-color: #00bfff;
            opacity: 50%;
        }
        .kotak {
            background-color: white;
            padding-right: 5%;
            padding-left: 18%;
        }
        .menu-kanan, .menu-kiri, .menu-tengah {
            width: 290px;
            height: 150px;
            float: left;
            margin-bottom: 15px;
            background-color: white;
            text-align: center;
            border-radius: 5px;
            margin : 20px;
            font-family: 'Verdana', sans-serif;
            font-size: 14px;
            opacity: 90%;
        }
        .kotak p {
            font-size: 13px;
        }
        footer {
            clear: both;
            background-color: #1e90ff;
            color: black;
            text-align: center;
            font-family: 'Verdana', sans-serif;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header align = "center">
        <h2><img src="sip.jpg" height="150px" width="250">daftar.in</h2>
    </header>

<div class="baris1">
    <input type="button" value="Masuk" onclick="window.location='menu.php'"/>
</div>

<div class="baris2">
    <input type="button" value="Login Admin" onclick="window.location='login.php'"/>
</div>

    <div class="kotak">
        <div class="menu-kiri">
            <h4><i style='font-size:24px' class='fas'>&#xf46d;</i>BLJ</h4>
            <P>Registrasi delegasi BLJ HIMASIFO</P>
        </div>

        <div class="menu-tengah">
            <h4><i style='font-size:24px' class='fas'>&#xf46d;</i>HIMASIFO</h4>
            <P>Registrasi Anggota Luar Biasa dan panitia program kerja HIMASIFO</P>
        </div>

        <div class="menu-kanan">
            <h4><i style='font-size:24px' class='fas'>&#xf46d;</i>ISCOM</h4>
            <P>Registrasi pengurus dan panitia <br>program kerja ISCOM</P>
        </div>
    </div>   
    <br><br><br><br><br>
    <footer>
        Diah Fatmawati, Tiara Karunia Miranti - Sistem Informasi UPN "Veteran" Jawa Timur || @copyright 2020
    </footer>
    <br>
</body>
</html>