<?php 
require_once "../../core/init.php";

// menangkap data id yang di kirim dari url
$id = $_GET['id_upload'];
 
 
// menghapus data dari database
mysqli_query($link,"DELETE FROM upload WHERE id_upload='$id' ");
	//echo "Berhasil Dihapus";

 
// mengalihkan halaman kembali ke index.php
header("location:crudupload.php");
 
?>