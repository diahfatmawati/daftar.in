<!DOCTYPE html>
<html lang="en">
<head>
    <title>daftar.in home</title>
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

        .home {
            margin-right: 10%;
            margin-left: 45%;
        }

        .home input {
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

        .home input:hover{
            color : white;
            background-color: #00bfff;
            opacity: 50%;
        }

        .baris1 {
            margin-right: 20%;
            margin-left: 25%;
        }

        .baris2 {
            margin-right: 30%;
            margin-left: 30%;
        }

        .baris1 input {
            background-color: white;
            color: black;
            width: 200px;
            height: 120px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 50%;
            font-size: 16px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 20px;
            font-weight: bold;
        }

        .baris2 input {
            background-color: white;
            color: black;
            width: 200px;
            height: 120px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            opacity: 50%;
            font-size: 16px;
            border-radius: 5px;
            font-family: 'Verdana', sans-serif;
            font-size: 20px;
            font-weight: bold;
        }

        .baris1 input:hover, .baris2 input:hover {
            color : white;
            background-color: #00bfff;
            opacity: 50%;
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

<div class="home">
    <input type="button" value="keluar" onclick="window.location='index.php'"/>
</div>
    <div class="baris1">
        <input type="button" value="BLJ" onclick="window.location='blj.php'"/>
        <input type="button" value="HIMASIFO" onclick="window.location='himasifo.php'"/>
        <input type="button" value="ISCOM" onclick="window.location='iscom.php'"/>
    </div>
    
    <div class="baris2">
        <input type="button" value="SARAN" onclick="window.location='saran.php'"/>
        <input type="button" value="TENTANG KAMI" onclick="window.location='tentangkami.php'"/>
    </div>
    <br>
    <footer>
        Diah Fatmawati, Tiara Karunia Miranti - Sistem Informasi UPN "Veteran" Jawa Timur || @copyright 2020
    </footer><br>
</body>
</html>