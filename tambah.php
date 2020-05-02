<?php
  include "koneksi.php";
  $full_name  = $_POST['full_name'];
  $username  = $_POST['username'];
  $password = $_POST['password']
  $mysqli  = "INSERT INTO sign_up (full_name, username, password) VALUES ('$full_name', '$user_name','password')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    header('Location: tampil.php?status=sukses');
  } else {
    header('Location: tampil.php?status=gagal');
  }
  mysqli_close($koneksi);
?>