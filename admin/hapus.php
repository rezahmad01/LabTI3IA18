<?php
require_once "../core/init.php";


$username = $_GET['username'];
mysqli_query($link,"DELETE FROM people WHERE username='$username' ");
header("Location: adminhapus.php");

?>
