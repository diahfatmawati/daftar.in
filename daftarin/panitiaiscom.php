<!DOCTYPE html>
<html>
<head>
    <title> daftar.in Pendaftaran Panitia ISCOM </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
<body><br>
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
$error_npm = "";
$error_angkatan = "";
$error_jenis_kelamin = "";
$error_domisili = "";
$error_email = "";
$error_wa = "";
$error_id_line = "";
$error_divisi1 = "";
$error_divisi2 = "";
$error_alasan = "";

$nama = "";
$npm = "";
$angkatan = "";
$jenis_kelamin = "";
$domisili = "";
$email = "";
$wa = "";
$id_line = "";
$divisi1 = "";
$divisi2 = "";
$alasan = "";

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

    if (empty($_POST["npm"]))
    {
        $error_npm = "wajib di isi";
    }
    else
    {
        $npm = cek_input($_POST["npm"]);

        if (!is_numeric($npm)) 
        {
            $error_npm = "input hanya boleh angka";
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

    if (empty($_POST["jenis_kelamin"]))
    {
        $error_jenis_kelamin = "pilih salah satu";
    }
    else
    {
        $jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
    }

    if (empty($_POST["domisili"]))
    {
        $error_domisili = "wajib di isi";
    }
    else
    {
        $domisili = cek_input($_POST["domisili"]);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$domisili)) 
        {
            $domisiliErr = "input hanya huruf, angka dan spasi";
        }
    }

    if (empty($_POST["email"]))
    {
        $error_email = "Email tidak boleh kosong";
    }
    else
    {
        $email = cek_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $error_email = "Format email Invalid";
        }
    }

    if (empty($_POST["id_line"]))
    {
        $error_id_line = "wajib di isi";
    }
    else
    {
        $id_line = cek_input($_POST["id_line"]);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$id_line)) 
        {
            $id_lineErr = "input hanya huruf, angka dan spasi";
        }
    }

   if (empty($_POST["wa"]))
    {
        $error_wa = "wajib di isi";
    }
    else
    {
        $wa = cek_input($_POST["wa"]);

        if (!is_numeric($wa)) 
        {
            $error_wa = "input hanya boleh angka";
        }
    }

    if (empty($_POST["divisi1"]))
    {
        $error_divisi1 = "pilih salah satu";
    }
    else
    {
        $divisi1 = cek_input($_POST["divisi1"]);
    }

    if (empty($_POST["divisi2"]))
    {
        $error_divisi2 = "pilih salah satu";
    }
    else
    {
        $divisi2 = cek_input($_POST["divisi2"]);
    }

    if (empty($_POST["alasan"]))
    {
        $error_alasan = "Pesan tidak boleh kosong";
    }
    else
    {
        $alasan = cek_input($_POST["alasan"]);
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
<label class="main"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Form Pendaftaran Panitia ISCOM</label>
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

                <div class="form-group row">
                    <label for="npm" class="col-sm-3 col-form-label"> NPM </label>
                    <label> : </label>
                    <div class="col-sm-8">
                        <input type="text" name="npm" class="form-control <?php echo($error_npm !="" ? "is-invalid" : "");?>" id="npm" placeholder="NPM" value="<?php echo $npm; ?>">
                        <span class="warning"><?php echo $error_npm; ?></span>
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

                <div class="from-group row radio-inline">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label"> Jenis Kelamin </label>
                    <label> : </label>
                    <br> &nbsp; &nbsp; <br>
                    <div class="radio-inline">
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin" > Laki-laki </label>
                    </div>
                    <br> &nbsp; &nbsp; <br>
                    <div class="radio-inline">
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin" > Perempuan </label>
                    </div>
                    <span class="warning"><?php echo $error_jenis_kelamin; ?></span>
                </div>

                <div class="form-group row">
                    <label for="domisili" class="col-sm-3 col-form-label"> Domisili </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <input type="text" name="domisili" class="form-control <?php echo($error_domisili !="" ? "is-invalid" : "");?>" id="domisili" placeholder="Domisili" value="<?php echo $domisili; ?>">
                    <span class="warning"><?php echo $error_domisili; ?></span>
                </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label"> Email </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <input type="text" name="email" class="form-control <?php echo($error_email !="" ? "is-invalid" : "");?>" id="email" placeholder="Email" value="<?php echo $email; ?>">
                    <span class="warning"><?php echo $error_email; ?></span>
                </div>
                </div>

                <div class="form-group row">
                    <label for="id_line" class="col-sm-3 col-form-label"> Line </label>
                    <label> : </label>
                    <div class="col-sm-8">
                        <input type="text" name="id_line" class="form-control <?php echo($error_id_line !="" ? "is-invalid" : "");?>" id="id_line" placeholder="ID Line" value="<?php echo $id_line; ?>">
                        <span class="warning"><?php echo $error_id_line; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="wa" class="col-sm-3 col-form-label"> WA </label>
                    <label> : </label>
                    <div class="col-sm-7">
                        <input type="text" name="wa" class="form-control <?php echo($error_wa !="" ? "is-invalid" : "");?>" id="wa" placeholder="No WA" value="<?php echo $wa; ?>">
                        <span class="warning"><?php echo $error_wa; ?></span>
                    </div>
                </div>         

                <div class="from-group row">
                    <label for="divisi1" class="col-sm-3 col-form-label"> Divisi 1 </label>
                    <label> : </label>
                    <div class="col-sm-8">
                    <select class="form-control form-control-sm col-sm-8" name="divisi1">
                        <option name="divisi1" value="Divisi Acara" id="divisi1"> Divisi Acara </option>
                        <option name="divisi1" value="Divisi Kesahatan" id="divisi1"> Divisi Kesehatan </option>
                        <option name="divisi1" value="Divisi Perlengkapan" id="divisi1"> Divisi Perlengkapan </option>
                        <option name="divisi1" value="Divisi Konsumsi" id="divisi1"> Divisi Konsumsi </option>
                        <option name="divisi1" value="Divisi PDD" id="divisi1"> Divisi Publikasi, Dekorasi, dan Dokumentasi</option>
                        <option name="divisi1" value="Divisi Humas" id="divisi1"> Divisi Humas </option>
                        <option name="divisi1" value="Divisi Keamanan" id="divisi1"> Divisi Keamanan </option>
                    </select>
                    </div>
                    <span class="warning"><?php echo $error_divisi1; ?></span>
                </div> 

                <div class="from-group row">
                    <label for="divisi2" class="col-sm-3 col-form-label"> Divisi 2 </label>
                    <label> : </label>
                    <div class="col-sm-8">
                    <select class="form-control form-control-sm col-sm-8" name="divisi2">
                        <option name="divisi2" value="Divisi Acara" id="divisi2" > Divisi Acara </option>
                        <option name="divisi2" value="Divisi Kesahatan" id="divisi2"> Divisi Kesehatan </option>
                        <option name="divisi2" value="Divisi Perlengkapan" id="divisi2"> Divisi Perlengkapan </option>
                        <option name="divisi2" value="Divisi Konsumsi" id="divisi2"> Divisi Konsumsi </option>
                        <option name="divisi2" value="Divisi PDD" id="divisi2"> Divisi Publikasi, Dekorasi, dan Dokumentasi</option>
                        <option name="divisi2" value="Divisi Humas" id="divisi2"> Divisi Humas </option>
                        <option name="divisi2" value="Divisi Keamanan" id="divisi2"> Divisi Keamanan </option>
                    </select>
                    </div>
                    <span class="warning"><?php echo $error_divisi2; ?></span>
                </div> 

                <div class="form-group row">
                    <label for="alasan" class="col-sm-3 col-form-label"> Alasan </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <textarea type="text" name="alasan" class="form-control <?php echo($error_alasan !="" ? "is-invalid" : "");?>" id="alasan" placeholder="Alasan" value="<?php echo $alasan; ?>"></textarea>
                    <span class="warning"><?php echo $error_alasan; ?></span>
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
<br><br><br>
<footer>Diah Fatmawati, Tiara Karunia Miranti - Sistem Informasi UPN "Veteran" Jawa Timur || @copyright 2020</footer>
<br>
<?php
include "proses_panitiaiscom.php";
?>
</body>
</html>