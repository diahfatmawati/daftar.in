<!DOCTYPE html>
<html>
<head>
    <title> daftar.in Pendaftaran Anggota Luar Biasa HIMASIFO </title>
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
$error_nama_lengkap = "";
$error_nama_panggilan = "";
$error_npm = "";
$error_angkatan = "";
$error_jenis_kelamin = "";
$error_tmp_lahir = "";
$error_tgl_lahir = "";
$error_domisili = "";
$error_alamat_ktp = "";
$error_agama = "";
$error_email = "";
$error_wa = "";
$error_id_line = "";
$error_passion = "";
$error_organisasi = "";
$error_prestasi = "";
$error_id_line = "";
$error_dept1 = "";
$error_dept2 = "";
$error_alasan_dept = "";
$error_alasan_hima = "";

$nama_lengkap = "";
$nama_panggilan = "";
$npm = "";
$angkatan = "";
$jenis_kelamin = "";
$tmp_lahir = "";
$tgl_lahir = "";
$domisili = "";
$alamat_ktp = "";
$agama = "";
$email = "";
$wa = "";
$id_line = "";
$passion = "";
$organisasi = "";
$prestasi = "";
$id_line = "";
$dept1 = "";
$dept2 = "";
$alasan_dept = "";
$alasan_hima = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama_lengkap"]))
    {
        $error_nama_lengkap = "wajib di isi";
    }
    else
    {
        $nama_lengkap = cek_input($_POST["nama_lengkap"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$nama_lengkap)) 
        {
            $nama_lengkapErr = "input hanya huruf dan spasi";
        }
    }

    if (empty($_POST["nama_panggilan"]))
    {
        $error_nama_panggilan = "wajib di isi";
    }
    else
    {
        $nama_panggilan = cek_input($_POST["nama_panggilan"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$nama_panggilan)) 
        {
            $nama_panggilanErr = "input hanya huruf dan spasi";
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

    if (empty($_POST["tmp_lahir"]))
    {
        $error_tmp_lahir = "wajib di isi";
    }
    else
    {
        $tmp_lahir = cek_input($_POST["tmp_lahir"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$tmp_lahir)) 
        {
            $tmp_lahirErr = "input hanya huruf dan spasi";
        }
    }

    if (empty($_POST["tgl_lahir"]))
    {
        $error_tgl_lahir = "wajib di isi";
    }
    else
    {
        $tgl_lahir = cek_input($_POST["tgl_lahir"]);
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

    if (empty($_POST["alamat_ktp"]))
    {
        $error_alamat_ktp = "wajib di isi";
    }
    else
    {
        $alamat_ktp = cek_input($_POST["alamat_ktp"]);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$alamat_ktp)) 
        {
            $alamat_ktpErr = "input hanya huruf, angka dan spasi";
        }
    }

    if (empty($_POST["agama"]))
    {
        $error_agama = "pilih salah satu";
    }
    else
    {
        $agama = cek_input($_POST["agama"]);
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

    if (empty($_POST["passion"]))
    {
        $error_passion = "wajib di isi";
    }
    else
    {
        $passion = cek_input($_POST["passion"]);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$passion)) 
        {
            $passionErr = "input hanya huruf, angka dan spasi";
        }
    }

    if (empty($_POST["organisasi"]))
    {
        $error_organisasi = "Pesan tidak boleh kosong";
    }
    else
    {
        $organisasi = cek_input($_POST["organisasi"]);
    }

    if (empty($_POST["prestasi"]))
    {
        $error_prestasi = "Pesan tidak boleh kosong";
    }
    else
    {
        $prestasi = cek_input($_POST["prestasi"]);
    }    

    if (empty($_POST["dept1"]))
    {
        $error_dept1 = "pilih salah satu";
    }
    else
    {
        $dept1 = cek_input($_POST["dept1"]);
    }

    if (empty($_POST["dept2"]))
    {
        $error_dept2 = "pilih salah satu";
    }
    else
    {
        $dept2 = cek_input($_POST["dept2"]);
    }

    if (empty($_POST["alasan_dept"]))
    {
        $error_alasan_dept = "Pesan tidak boleh kosong";
    }
    else
    {
        $alasan_dept = cek_input($_POST["alasan_dept"]);
    }

    if (empty($_POST["alasan_hima"]))
    {
        $error_alasan_hima = "Pesan tidak boleh kosong";
    }
    else
    {
        $alasan_hima = cek_input($_POST["alasan_hima"]);
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
<label class="main"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Form Pendaftaran Anggota Luar Biasa HIMASIFO</label>
<br><br>
<div class="row">
    <div class="container col-md-6">
        <div class="card">
            <div class="card-body">

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-sm-3 col-form-label"> Nama Lengkap </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <input type="text" name="nama_lengkap" class="form-control <?php echo($error_nama_lengkap !="" ? "is-invalid" : "");?>" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>">
                    <span class="warning"><?php echo $error_nama_lengkap; ?></span>
                </div>
                </div>

                <div class="form-group row">
                    <label for="nama_panggilan" class="col-sm-3 col-form-label"> Nama Panggilan </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <input type="text" name="nama_panggilan" class="form-control <?php echo($error_nama_panggilan !="" ? "is-invalid" : "");?>" id="nama_panggilan" placeholder="Nama Panggilam" value="<?php echo $nama_panggilan; ?>">
                    <span class="warning"><?php echo $error_nama_panggilan; ?></span>
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
                    <label for="tmp_lahir" class="col-sm-3 col-form-label"> Tempat Lahir </label>
                    <label> : </label>
                    <div class="col-sm-7">
                        <input type="text" name="tmp_lahir" class="form-control <?php echo($error_tmp_lahir !="" ? "is-invalid" : "");?>" id="tmp_lahir" placeholder="Tempat lahir" value="<?php echo $tmp_lahir; ?>">
                        <span class="warning"><?php echo $error_tmp_lahir; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-3 col-form-label"> Tanggal Lahir </label>
                    <label> : </label>
                    <div class="col-sm-5">
                        <input type="date" name="tgl_lahir" class="form-control <?php echo($error_tgl_lahir !="" ? "is-invalid" : "");?>" id="tgl_lahir"  value="<?php echo $tgl_lahir; ?>">
                        <span class="warning"><?php echo $error_tgl_lahir; ?></span>
                    </div>
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
                    <label for="alamat_ktp" class="col-sm-3 col-form-label"> Alamat sesuai KTP </label>
                    <label> : </label>
                <div class="col-sm-7">
                    <input type="text" name="alamat_ktp" class="form-control <?php echo($error_alamat_ktp !="" ? "is-invalid" : "");?>" id="alamat_ktp" placeholder="Alamat KTP" value="<?php echo $alamat_ktp; ?>">
                    <span class="warning"><?php echo $error_alamat_ktp; ?></span>
                </div>
                </div>

                <div class="from-group row radio-inline">
                    <label for="agama" class="col-sm-3 col-form-label"> Agama </label>
                    <label> : </label>
                    <br> &nbsp;&nbsp;&nbsp; <br>
                    <div class="radio-inline">
                    <label><input type="radio" name="agama" value="Islam" id="agama" > Islam </label>
                    </div>
                    <br> &nbsp; <br>
                    <div class="radio-inline">
                    <label><input type="radio" name="agama" value="Kristen" id="agama" > Kristen </label>
                    </div>
                    <br> &nbsp; <br>
                    <div class="radio-inline">
                    <label><input type="radio" name="agama" value="Katolik" id="agama" > Katolik </label>
                    </div>
                    <br> &nbsp; <br>
                    <div class="radio-inline">
                    <label><input type="radio" name="agama" value="Hindu" id="agama" > Hindu </label>
                    </div>
                    <br> &nbsp; <br>
                    <div class="radio-inline">
                    <label><input type="radio" name="agama" value="Budha" id="agama" > Budha </label>
                    </div>
                    <br> &nbsp; <br>
                    <div class="radio-inline">
                    <label><input type="radio" name="agama" value="Konghucu" id="agama" > Konghucu </label>
                    </div>
                    <span class="warning"><?php echo $error_agama; ?></span>
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

                <div class="form-group row">
                    <label for="passion" class="col-sm-3 col-form-label"> Keahlian </label>
                    <label> : </label>
                <div class="col-sm-7">
                    <input type="text" name="passion" class="form-control <?php echo($error_passion !="" ? "is-invalid" : "");?>" id="passion" placeholder="Passion" value="<?php echo $passion; ?>">
                    <span class="warning"><?php echo $error_passion; ?></span>
                </div>
                </div>

                <div class="form-group row">
                    <label for="organisasi" class="col-sm-3 col-form-label"> Peng. Organisasi </label>
                    <label> : </label>
                <div class="col-sm-7">
                    <textarea type="text" name="organisasi" class="form-control <?php echo($error_organisasi !="" ? "is-invalid" : "");?>" id="organisasi" placeholder="Pengalaman Organisasi" value="<?php echo $organisasi; ?>"></textarea>
                    <span class="warning"><?php echo $error_organisasi; ?></span>
                </div>
                </div>

                <div class="form-group row">
                    <label for="prestasi" class="col-sm-3 col-form-label"> Prestasi </label>
                    <label> : </label>
                <div class="col-sm-7">
                    <textarea type="text" name="prestasi" class="form-control <?php echo($error_prestasi !="" ? "is-invalid" : "");?>" id="prestasi" placeholder="Prestasi" value="<?php echo $prestasi; ?>"></textarea>
                    <span class="warning"><?php echo $error_prestasi; ?></span>
                </div>
                </div>

                <div class="from-group row">
                    <label for="dept1" class="col-sm-3 col-form-label"> Departemen 1 </label>
                    <label> : </label>
                    <div class="col-sm-8">
                    <select class="form-control form-control-sm col-sm-8" name="dept1">
                        <option name="dept1" value="Kaderisasi" id="dept1" > Departemen Kaderisasi </option>
                        <option name="dept1" value="Litbang" id="dept1" > Departemen Penelitian dan Pengembangan </option>
                        <option name="dept1" value="Advokasi" id="dept1" > Departemen Advokasi </option>
                        <option name="dept1" value="DalamNegeri" id="dept1" > Departemen Dalam Negeri </option>
                        <option name="dept1" value="LuarNegeri" id="dept1" > Departemen Luar Negeri </option>
                        <option name="dept1" value="Kewirausahaan" id="dept1" > Departemen Kewirausahaan </option>
                        <option name="dept1" value="Kominfo" id="dept1" > Departemen Komunikasi dan Informasi </option>
                    </select>
                    </div>
                    <span class="warning"><?php echo $error_dept1; ?></span>
                </div>

                <div class="from-group row">
                    <label for="dept2" class="col-sm-3 col-form-label"> Departemen 2 </label>
                    <label> : </label>
                    <div class="col-sm-8">
                    <select class="form-control form-control-sm col-sm-8" name="dept2">
                        <option name="dept2" value="Kaderisasi" id="dept2" > Departemen Kaderisasi </option>
                        <option name="dept2" value="Litbang" id="dept2" > Departemen Penelitian dan Pengembangan </option>
                        <option name="dept2" value="Advokasi" id="dept2" > Departemen Advokasi </option>
                        <option name="dept2" value="DalamNegeri" id="dept2" > Departemen Dalam Negeri </option>
                        <option name="dept2" value="LuarNegeri" id="dept2" > Departemen Luar Negeri </option>
                        <option name="dept2" value="Kewirausahaan" id="dept2" > Departemen Kewirausahaan </option>
                        <option name="dept2" value="Kominfo" id="dept2" > Departemen Komunikasi dan Informasi </option>
                    </select>
                    </div>
                    <span class="warning"><?php echo $error_dept2; ?></span>
                </div>

                <div class="form-group row">
                    <label for="alasan_dept" class="col-sm-3 col-form-label"> Alasan </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <textarea type="text" name="alasan_dept" class="form-control <?php echo($error_alasan_dept !="" ? "is-invalid" : "");?>" id="alasan_dept" placeholder="Alasan memilih departemen" value="<?php echo $alasan_dept; ?>"></textarea>
                    <span class="warning"><?php echo $error_alasan_dept; ?></span>
                </div>
                </div>

                <div class="form-group row">
                    <label for="alasan_hima" class="col-sm-3 col-form-label"> Alasan </label>
                    <label> : </label>
                <div class="col-sm-8">
                    <textarea type="text" name="alasan_hima" class="form-control <?php echo($error_alasan_hima !="" ? "is-invalid" : "");?>" id="alasan_hima" placeholder="Alasan mendaftar hima" value="<?php echo $alasan_hima; ?>"></textarea>
                    <span class="warning"><?php echo $error_alasan_hima; ?></span>
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
include "proses_albhimasifo.php";
?>
</body>
</html>