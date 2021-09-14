<?php
require_once "../core/init.php";
if( !isset($_SESSION['level'])){
  header('Location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GANTI PASSWORD - 3IA18</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.ico" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,cyrillic-ext" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/photostack/photostack.css" rel="stylesheet">
  <link href="../lib/fullpage-menu/fullpage-menu.css" rel="stylesheet">
  <link href="../lib/cubeportfolio/cubeportfolio.css" rel="stylesheet">
  <link href="../lib/superslides/superslides.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Polaroyd
    Template URL: https://templatemag.com/polaroyd-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
    ======================================================= -->
  </head>

  <body>

  <?php require_once "header.php"; ?>

    <div class="container">
      <div class="row mt presentation">
        <h1 class="centered">Ganti Password</h1>
      </div>
      <!-- /row -->
      <!-- end:Filter -->
    </div>
    <form action="ganti.php" method="post">
      <div class="centered">
        <label>Masukan Password Lama</label><br>
        <input type="password" name="password_lama" placeholder="Password Lama" class="inputrounded"> <br><br>
        <label>Masukan Password Baru</label><br>
        <input type="password" name="password_baru" placeholder="Password Baru" class="inputrounded"> <br><br>
        <label>Konfirmasi Password Baru</label><br>
        <input type="password" name="konfirmasi_password" placeholder="Ulangi Password" class="inputrounded"> <br><br>
        <input type="submit" name="submit" value="Konfirmasi" class="ghost-button-rounded-corners"> <br> <br>

        <?php
        if(isset($_POST['submit'])){
    //membuat variabel untuk menyimpan data inputan yang di isikan di form
          $password_lama      = $_POST['password_lama'];
          $password_baru      = $_POST['password_baru'];
          $konfirmasi_password  = $_POST['konfirmasi_password'];

    //cek dahulu ke database dengan query SELECT
    //kondisi adalah WHERE (dimana) kolom password adalah $password_lama
    $kode   = $_SESSION['username']; //ini dari session saat login

    $cek      = $link->query("SELECT * FROM people WHERE username ='$kode' AND password ='$password_lama'");

    if($cek->num_rows){
      //kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
      //membuat kondisi minimal password adalah 0 karakter
      if($password_baru == $konfirmasi_password){
          //jika semua kondisi sudah benar, maka melakukan update kedatabase
          //query UPDATE SET password = encrypt md5 password_baru
          //kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut

        $kode   = $_SESSION['username'];
        $password_baru  = ($password_baru);
        $update     = $link->query("UPDATE people SET password='$password_baru' WHERE username='$kode'");
        if($update){
            //kondisi jika proses query UPDATE berhasil
          echo "<h4>Password berhasil di rubah</h4>";
        }else{
            //kondisi jika proses query gagal
          echo "<h4>Gagal merubah password</h4>";
        }
      }else{
          //kondisi jika password baru beda dengan konfirmasi password
        echo "<h4>Konfirmasi password tidak cocok</h4>";
      }
    }else{
      //kondisi jika password lama tidak cocok dengan data yang ada di database
      echo "<h4>Password lama tidak cocok</h4>";
    }
  }
  ?>
</div>
</form>
<!-- end:Clients section -->

<!-- JavaScript Libraries -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/modernizr/modernizr.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/php-mail-form/validate.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/cubeportfolio/cubeportfolio.js"></script>
<script src="../lib/classie/classie.js"></script>
<script src="../lib/fullpage-menu/fullpage-menu.js"></script>
<script src="../lib/photostack/photostack.js"></script>
<script src="../lib/superslides/superslides.js"></script>

<!-- Template Main Javascript File -->
<script src="../js/main.js"></script>

</body>
</html>
