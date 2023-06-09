<?php
require_once('conn.php');

if (isset($_POST['btn-save'])) {
  $username = mysqli_real_escape_string($mysqli, $_POST['username']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $password = mysqli_real_escape_string($mysqli, $_POST['Password']);

  if (empty($username) || empty($email) || empty($password)) {
    echo 'tolong diisi sir yang kosong';
  } else {
    $sql = "insert into pembeli (username,email,password) values('$username','$email','$password')";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
      echo header("Location:login.php");
    } else {
      echo 'please check your query';
    }
  }
}


?>