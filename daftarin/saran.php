<!DOCTYPE html>
<html>
<head>
    <title> daftar.in Saran dan Masukan </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        .warning {
            color: red;
        }
        .main {
            font-weight: bold; font-size: 35px; font-family: arial; color: black;
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
            text-align: center;
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
                    <li><a href="panitiahimasifo.php">Panitia Himasifo</a></li>
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
            <li><a href="index.php">KELUAR</a></li>
        </ul>
    </div>

<?php
$error_nama = "";
$error_angkatan = "";
$error_saran = "";

$nama = "";
$angkatan = "";
$saran = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"]))
    {
        $error_nama = "wajib di isi";
    }
    else
    {
        $nama = cek_input($_POST["nama"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
        {
            $namaErr = "input hanya huruf dan spasi";
        }
    }

    if (empty($_POST["angkatan"]))
    {
        $error_angkatan = "pilih salah satu";
    }
    else
    {
        $angkatan = cek_input($_POST["angkatan"]);
    }

    if (empty($_POST["saran"]))
    {
        $error_saran = "Pesan tidak boleh kosong";
    }
    else
    {
        $saran = cek_input($_POST["saran"]);
    }
}

function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<br><br><br>
<label class="main"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Silahkan Tuliskan Saran dan Masukan untuk Website ini :)</label>
<br><br>
<div class="row">
    <div class="container col-md-6">
        <div class="card">
            <div class="card-body">

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label"> Nama </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>">
                    <span class="warning"><?php echo $error_nama; ?></span>
                </div>
                </div>

                <div class="from-group row">
                    <label for="angkatan" class="col-sm-3 col-form-label"> Angkatan </label>
                    <label> : </label>
                    <div class="col-sm-5">
                    <select class="form-control form-control-sm col-sm-5" name="angkatan">
                        <option name="angkatan" value="2019" id="angkatan" > 2019 </option>
                        <option name="angkatan" value="2018" id="angkatan" > 2018 </option>
                        <option name="angkatan" value="2017" id="angkatan" > 2017 </option>
                        <option name="angkatan" value="2016" id="angkatan" > 2016 </option>
                        <option name="angkatan" value="2016" id="angkatan" > 2015 </option>
                    </select>
                    </div>
                    <span class="warning"><?php echo $error_angkatan; ?></span>
                </div> 

                <div class="form-group row">
                    <label for="saran" class="col-sm-3 col-form-label"> Saran dan Masukan </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <textarea type="text" name="saran" class="form-control <?php echo($error_saran !="" ? "is-invalid" : "");?>" id="saran" placeholder="Tulis di sini" value="<?php echo $saran; ?>"></textarea>
                    <span class="warning"><?php echo $error_saran; ?></span>
                </div>
                </div>

                <div class="form-group row" align="right">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"> Kirim </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
<footer>
Diah Fatmawati, Tiara Karunia Miranti - Sistem Informasi UPN "Veteran" Jawa Timur || @copyright 2020
</footer>

<?php
include "proses_saran.php";
?>
</body>
</html>