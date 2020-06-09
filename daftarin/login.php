<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftarin";

include "proses_login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title> daftar.in login admin</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
  	<link rel="stylesheet" type="text/css">
  	<style type="text/css">
    body {
       margin: 0;
       padding: 0;
       background-color: #1e90ff;
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
       background-attachment: fixed;
       font-family: sans-serif;
     }
     .login {
       position: fixed;
       top: 50%;
       left: 45%;
       transform: translate(-30%, -50%);
       background: rgba(4, 29, 23, 0.2);
       padding: 50px;
       width: 300px;
       box-shadow: 0px 0px 5px 5px #1e90ff;
       border-radius: 15px;
     }
     .avatar {
       font-size: 50px ;
       background: #FDF5E6;
       width: 70px;
       height: 70px;
       line-height: 70px;
       position: fixed;
       left: 50%;
       top: 0;
       transform: translate(-50%, -50%);
       text-align: center;
       border-radius: 50%;
     }
     .login h2 {
       text-align: center;
       color: white;
       font-size: 30px;
       font-family: sans-serif;
       letter-spacing: 3px;
       padding-top: 0;
       margin-top: -20px;
     }
     .box-login {
       display: flex;
       justify-content:space-between;
       margin: 10px;
       border-bottom: 2px solid white;
       padding: 8px 0;
     }
     .box-login i {
       font-size: 23px;
       color: white;
       padding: 5px 0;
     }
     .box-login input {
       width: 85%;
       padding: 5px 0;
       background: none;
       border: none;
       outline: none;
       color: white;
       font-size: 18px;
     }
     .box-login input::placeholder {
       color: white;
     }
     .box-login input:hover{
       background: rgba(10, 10, 10,s 0.5);
     }
     .btn-login {
       margin-left: 10px;
       margin-bottom: 20px;
       background: none;
       border: 1px solid white;
       width: 92.5%;
       padding: 10px;
       color: white;
       font-size: 18px;
       letter-spacing: 3px;
       cursor: pointer;
       }
     .btn-login:hover{
       background: rgba(12, 30, 15, 0.5);
     }
     .bottom {
       margin-left: 10px;
       margin-right: 10px;
       display: flex;
       justify-content: space-between;
     }
     .bottom a {
       color: white;
       font-size: 15px;
       text-decoration: none;
     }
     .bottom a:hover {
     text-decoration: underline;
     }
    footer {
      clear: both;
      background-color: #1e90ff;
      color: black;
      position: absolute, center;
      text-align: center;
      margin-top: 42%;
      padding-bottom: 2%;
      font-family: 'Verdana', sans-serif;
      font-size: 14px;
    }
  </style>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <div class="login" id="form">
        <form action="" method="POST">
          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>
          <h2>Login Admin daftar.in</h2>
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" id="email" name="email" placeholder="username">
          </div>
          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" id="pass" name="pass" placeholder="password">
          </div><br>
          <button type="submit" name="submit" id="submit" value="Login" class="btn-login"> Login </button>
          <a href="index.php" style="color: white;"> Back To Menu </a>  
        </form>
      </div>

<?php
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = mysqli_query($conn,"SELECT * FROM admin 
              WHERE email = '$email' AND pass = '$pass'");
    $cek = mysqli_num_rows($sql);
  if($cek == 1){
    $_SESSION['adminweb']=$email;
    header("location:cetak.php");
  exit;
  }else {
    echo "<br><center style='color:white; font-size:30px;'><b> Maaf username atau password anda salah </b></center>";
  }
  }
?>
<div>
<footer>Diah Fatmawati, Tiara Karunia Miranti - Sistem Informasi UPN "Veteran" Jawa Timur || @copyright 2020</footer>
</div>
</head>
</html>