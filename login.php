<?php
require_once "core/init.php";

if($_SESSION){
  if($_SESSION['level']=="admin"){
    header('Location: admin/admin.php');
  }
  if($_SESSION['level']=="mhs"){
    header('Location: member/member.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Class 3IA18</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,cyrillic-ext" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/photostack/photostack.css" rel="stylesheet">
  <link href="lib/fullpage-menu/fullpage-menu.css" rel="stylesheet">
  <link href="lib/cubeportfolio/cubeportfolio.css" rel="stylesheet">
  <link href="lib/superslides/superslides.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  Template Name: Polaroyd
  Template URL: https://templatemag.com/polaroyd-bootstrap-agency-template/
  Author: TemplateMag.com
  License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <div class="custom-navbar"><a class="fm-button" href="#">Menu</a></div>
  <div class="sidemenu">
    <ul class="fm-first-level">
      <li><a href="#menu1">Menu Kelas</a></li>
    </ul>
    <nav id="menu1" class="active">
      <a href="index.php">
        <span class="subtitle">Beranda Kelas 4IA18</span>
        Beranda
      </a>
      <a href="login.php">
        <span class="subtitle">Login</span>
        Login
      </a>
      <a href="team.php">
        <span class="subtitle">Informasi Team Kami</span>
        Team Kami
      </a>
    </nav>
  </div> <br><br>

  <form class="" action="login.php" method="post">
    <div class="container">
      <div class="row mt presentation">
        <h1 class="centered">LOGIN</h1>
        <div class="centered">
          <input type="text" name="username" placeholder="Username" class="inputrounded"> <br><br>
          <input type="password" name="password" placeholder="Password" class="inputrounded"> <br><br>
          <input type="submit" name="submit" value="LOGIN" class="ghost-button-rounded-corners"> <br> <br>

          <?php
          if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM people WHERE username='$username' ";
            $result = mysqli_query($link, $query);

            if(mysqli_num_rows($result) == 0){
              echo "<h4>Gagal Login Username Atau Password Tidak Sesuai</h4>";
            } else{
              $row = mysqli_fetch_assoc($result);
              $_SESSION['username']=$row['username'];
              $_SESSION['level']=$row['level'];

              if($row['level'] == "admin"){
                header('Location: admin/admin.php'); //ini halamannya cuma sebagai contoh yak
                // echo "Hai admin";
              }
              else if($row['level'] == "mhs"){
                header('Location: member/member.php'); //ini halamnannya cuma sebagai contoh yak
                // echo "Hai Mahasiswa";
              }
              else{
                echo "<h4>Gagal Login Username Atau Password Tidak Sesuai</h4>";
              }
            }
          }
          ?>
        </div>
      </div>
    </div>
  </form>
  <!-- /row -->


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/modernizr/modernizr.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/cubeportfolio/cubeportfolio.js"></script>
  <script src="lib/classie/classie.js"></script>
  <script src="lib/fullpage-menu/fullpage-menu.js"></script>
  <script src="lib/photostack/photostack.js"></script>
  <script src="lib/superslides/superslides.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
