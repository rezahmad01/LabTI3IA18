<?php
require_once "../../core/init.php";


$lokasifile = $_FILES['filekelas']['tmp_name'];
$namafile = $_FILES['filekelas']['name'];

$folder = "file/$namafile";

if(move_uploaded_file($lokasifile, "$folder")){
  $cek = mysqli_num_rows(mysqli_query($link, "SELECT * FROM upload_kelas WHERE kode_admin = '$_POST[kodeadmin]'
    AND periode = '$_POST[periode]' AND matkul = '$_POST[matkul]'"));
  if ($cek > 0){
    header("Location: ../adminuploadkelas.php?pesan=sudah");
  } else{
    $query = "INSERT INTO upload_kelas (kode_admin, nama, matkul, periode, file, deskripsi) VALUES ('$_POST[kodeadmin]',
      '$_POST[nama]', '$_POST[matkul]', '$_POST[periode]', '$namafile', '$_POST[deskripsi]')";
    $result = mysqli_query($link, $query);
    header("Location: ../adminuploadkelas.php?pesan=berhasil");
  }
} else{
  header("Location: ../adminuploadkelas.php?pesan=gagal");
}

 ?>
