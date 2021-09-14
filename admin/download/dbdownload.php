
<?php
require_once "../../core/init.php";


  $query = "SELECT * FROM upload";
  $hasil = mysqli_query($link, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[file]</b> <br>";
    echo "Deskripsi : $r[deskripsi] <br>";
    echo "<a href=\"simpandownload.php?file=$r[file]\">Download File</a><hr><br>";
  }
?>
