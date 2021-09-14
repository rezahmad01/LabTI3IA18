<?php
require_once "../core/init.php";
if( !isset($_SESSION['level'])){
  header('Location: ../login.php');
}
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DOWNLOAD - 3IA18</title>
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
  <link rel="stylesheet" type="text/css" href="../DataTables/datatables.css">
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
      <h1 class="centered">Lihat Nilai</h1>
      <hr>
    </div>
  </div>
  <div class="container">
    <h2>LIHAT NILAI KELAS 3IA18</h2>
    <hr>
        <div class="table-responsive">
          <table class="table table-hover table-bordered table-striped" id="datatables">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>File</th>
                <th>Nilai</th>
                <th>Tanggal Upload</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $no = 1;
              $data = mysqli_query($link,"SELECT * from upload_kelas ORDER BY `periode` DESC");
              while($r = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $r['matkul'] ;?></td>
                  <td><?php echo "<a href=\"downloadkelas/simpandownload.php?file=$r[file]\" class='atable'>$r[file]</a>"; ?></td> &emsp;&emsp;&ensp;</td>
                  <td><?php echo $r['deskripsi']; ?></td>
                  <td><?php echo $r['tgl_upload']; ?></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
            </table>
            <br><br><br>
          </div>
</div>
<?php require_once "footer.php"; ?>
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
    <script src="../DataTables/datatables.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#datatables').DataTable();
    });
    </script>
  </body>
  </html>
