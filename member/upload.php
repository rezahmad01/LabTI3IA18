<?php
require_once "../core/init.php";
if( !isset($_SESSION['level'])){
  header('Location: ../login.php');
}
// if($_SESSION){
//   if($_SESSION['level']=="admin"){
//     // header('Location: admin.php');
//     // echo "Hai admin";
//   }
//   if($_SESSION['level']=="mhs"){
//     // header('Location: mhs.php');
//     // echo "Hai Mahasiswa";
//   }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>UPLOAD ACTIVITY - 3IA18</title>
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

  <form enctype="multipart/form-data" class="" method="POST" action="upload/dbupload.php">
    <div class="container">
      <div class="row mt presentation">
        <h1 class="centered">UPLOAD</h1>
        <div class="centered">
         <!--  <input type="text" name="npm" placeholder="NPM" class="inputrounded"> <br><br>
          <input type="text" name="nama" placeholder="Nama" class="inputrounded"> <br><br> -->
          <input type="text" name="matkul" placeholder="Mata Kuliah" class="inputrounded"> <br><br>
          <input type="text" name="periode" placeholder="Activity ke-" class="inputrounded"> <br><br>
          <input type="text" name="deskripsi" placeholder="Deskripsi File" class="inputrounded"> <br><br>
          <center><input type="file" name="fupload" class="inputrounded"></center> <br><br>
          <input type="submit" name="submit" value="UPLOAD" class="ghost-button-rounded-corners"> <br> <br>

          <h3><a href="upload/crudupload.php">Cek Data</a></h3>
          <?php

          if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
              echo "<h3> Sukses Upload File </h3>";
              ?>
              <br>

              <?php
            }
            if($_GET['pesan'] == "sudah"){
              echo "<h3> Data masih ada, reset terlebih dahulu </h3>";
              ?>
              <h3><a href="upload/crudupload.php" class="warnateks">HAPUS</a></h3>

              <?php
              }
              if($_GET['pesan'] == "gagal"){
              echo "<h3> Data Masih Kosong/ Ukuran file terlalu besar  </h3>";
              ?>
              <br>

              <?php
            }}
            ?>


          </div>
        </div>
      </div>
    </form>

    <!-- /row -->


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
