<?php
require_once "../core/init.php";

$username = $_POST['username'];
// $username2 = $_POST['username2'];
$nama = $_POST['nama'];
$level = $_POST['level'];

mysqli_query($link, "UPDATE people SET nama_mhs = '$nama', level = '$level' WHERE username = '$username'");

header("Location: adminedit.php");

?>
