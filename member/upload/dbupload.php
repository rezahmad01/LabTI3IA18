<?php 
require_once "../../core/init.php";
// Baca lokasi file sementar dan nama file dari form (fupload)
// error_reporting(1);


$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "file/$nama_file";

$npm=$_SESSION['username'];
$cek      = $link->query("SELECT * FROM people WHERE username ='$npm'");

// tanggal sekarang
date_default_timezone_set('Asia/Jakarta');
$tgl_upload = date("Ymd");


// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")) {
	$cek = mysqli_num_rows(mysqli_query($link,"SELECT * FROM upload WHERE npm='$npm' AND periode='$_POST[periode]' AND matkul='$_POST[matkul]'"));
	if ($cek > 0){
		header("location:../upload.php?pesan=sudah");

	}
	else{
  // Masukkan informasi file ke database
	
     $data = mysqli_query($link,"SELECT * FROM people WHERE username ='$npm'");
     while($r = mysqli_fetch_array($data)){
       

		$query = "INSERT INTO upload (npm, nama_mhs, matkul , periode, file, deskripsi, tgl_upload)
		VALUES('$npm', '$r[nama_mhs]', '$_POST[matkul]' , '$_POST[periode]','$nama_file', '$_POST[deskripsi]','$tgl_upload')";

		mysqli_query($link, $query);

		header("location:../upload.php?pesan=berhasil");
  //echo "Nama File : <b>$nama_file</b> sukses di upload";
	}}}

	else{
		header("location:../upload.php?pesan=gagal");
	}
	?>
