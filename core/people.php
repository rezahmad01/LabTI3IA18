<?php
function register_user($nama, $username, $password, $level){
  global $link;

  //menghash password
  // $pass  = md5($pass);
  $query = "INSERT INTO people (nama_mhs, username, password, level) VALUES ('$nama', '$username', '$password', '$level')";

  if ( mysqli_query($link, $query) ) {
    return true;
  }else {
    return false;
  }

}


// mysqli_real_escape_string untuk mencegah string aneh pada sql injection
function register_cek_user($username){
  global $link;
  $query = "SELECT * FROM people WHERE username = '$username' ";

  if ( $result = mysqli_query($link, $query) ) {
    if(mysqli_num_rows($result) == 0 ) return true;
    else return false;
  }
}
 ?>
