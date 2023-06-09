<?php
include('conn.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM pembeli WHERE email ='$email' and password= '$password';";
    $hasil = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
    $jum = mysqli_num_rows($hasil);

    if ($jum == 1) {
        echo header("Location:index-after-login.php");
    } else {
        echo '<sript>
        window.location.href = "index-after-login.php";
        alert("Login failed. Invalid email or password!!")
        </sript>';
    }


}