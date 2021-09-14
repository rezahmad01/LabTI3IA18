<?php
require_once "../../core/init.php";
if( !isset($_SESSION['level'])){
  header('Location: ../../login.php');
}
// if($_SESSION){
//   if($_SESSION['level']=="admin"){
//     // header('Location: admin.php');
//     echo "Hai admin";
//   }
//   if($_SESSION['level']=="mhs"){
//     // header('Location: mhs.php');
//     echo "Hai Mahasiswa";
//   }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EXPONEN - KELAS 3IA18</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,cyrillic-ext" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../lib/photostack/photostack.css" rel="stylesheet">
  <link href="../../lib/fullpage-menu/fullpage-menu.css" rel="stylesheet">
  <link href="../../lib/cubeportfolio/cubeportfolio.css" rel="stylesheet">
  <link href="../../lib/superslides/superslides.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../DataTables/datatables.css">

  <!-- =======================================================
  Template Name: Polaroyd
  Template URL: https://templatemag.com/polaroyd-bootstrap-agency-template/
  Author: TemplateMag.com
  License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- Custom navbar -->
  <div class="custom-navbar"><a class="fm-button" href="#">Menu</a></div>
  <div class="sidemenu">
    <ul class="fm-first-level">
      <li><a href="#menu1">Menu Kelas</a></li>
    </ul>
    <nav id="menu1" class="active">
      <a href="../member.php">
        <span class="subtitle">Beranda Kelas 4IA18</span>
        Beranda
      </a>
      <a href="../tugas.php">
        <span class="subtitle">Informasi Tugas 4IA18</span>
        Informasi Tugas
      </a>
      <a href="../kelas.php">
        <span class="subtitle">Informasi Kelas 4IA18</span>
        Informasi Kelas
      </a>
      <a href="../lab.php">
        <span class="subtitle">Informasi Lab 4IA18</span>
        Informasi Lab
      </a>
      <a href="../download.php">
        <span class="subtitle">Download Materi</span>
        Download Materi
      </a>
      <a href="../upload.php">
        <span class="subtitle">Upload Tugas</span>
        Upload TUGAS
      </a>
      <a href="../ganti.php">
        <span class="subtitle">Ganti Password</span>
        Ganti Password
      </a>
      <a href="../../logout.php">
        <span class="subtitle">Logout</span>
        Logout
      </a>
    </nav>
  </div>
  <!-- /END CUSTOM NAVBAR -->
  <br><br><br><br>


  <div class="container">
    <h2>UPLOAD ACTIVITY 3IA18</h2>
    <hr> <br>
    <a href="../upload.php"><span class="ghost-button-rounded-corners">TAMBAH DATA</span></a> <br> <br>
    <div class="table-responsive">
      <table class="table-hover" id="datatables">
        <thead>
          <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Matkul</th>
            <th>Tugas Ke-</th>
            <th>File</th>
            <th>Deskripsi File</th>
            <th>Tanggal Upload</th>
            <th>Hapus Data</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $npm = $_SESSION['username'] ;
          $no = 1;
          $data = mysqli_query($link,"SELECT * from upload WHERE npm = '$npm' ORDER BY `periode` DESC");
          while($r = mysqli_fetch_array($data)){
            ?>
            <tr>
              <td><?php echo $r['npm'] ;?> &emsp;</td>
              <td><?php echo $r['nama_mhs'] ;?>&emsp;</td>
              <td><?php echo $r['matkul'] ;?>&emsp;</td>
              <td><?php echo $r['periode']; ?>&emsp;</td>
              <td><?php echo $r['file'] ;?> &emsp;&emsp;&emsp;</td>
              <td><?php echo $r['deskripsi']; ?>&emsp;</td>
              <td><?php echo $r['tgl_upload']; ?>&emsp;</td>
              <td>
                <br>
                <a href="crudhapus.php?id_upload=<?php echo $r['id_upload'];?>">HAPUS</a>
                <br>
                <hr>
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br><br><br>
  <!-- JavaScript Libraries -->
  <script src="../../lib/jquery/jquery.min.js"></script>
  <script src="../../lib/modernizr/modernizr.min.js"></script>
  <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../lib/php-mail-form/validate.js"></script>
  <script src="../../lib/easing/easing.min.js"></script>
  <script src="../../lib/cubeportfolio/cubeportfolio.js"></script>
  <script src="../../lib/classie/classie.js"></script>
  <script src="../../lib/fullpage-menu/fullpage-menu.js"></script>
  <script src="../../lib/photostack/photostack.js"></script>
  <script src="../../lib/superslides/superslides.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../../js/main.js"></script>
  <script src="../../DataTables/datatables.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#datatables').DataTable();
  });
  </script>

</body>
</html>
