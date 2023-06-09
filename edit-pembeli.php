<!DOCTYPE html>
<html>

<head>
    <title>EDIT PEMBELI</title>
</head>

<body>
    <style>
        img {
            width: 150px;
        }
    </style>
    <h2>CRUD DATA PEMBELI</h2>
    <br />
    <a href="index-pembeli.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA PEMBELI</h3>

    <?php
    include 'conn.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM pembeli WHERE id_pembeli = $id LIMIT 1";

    $result = mysqli_query($mysqli, $query);

    $d = mysqli_fetch_array($result);

    ?>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>username</td>
                <td>
                    <input type="text" name="username" value="<?php echo $d['username']; ?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat Pembeli</td>
                <td><input type="number" name="alamat_pembeli" value="<?php echo $d['alamat_pembeli']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" name="proses"></td>
            </tr>
        </table>
    </form>



    <?php

    if (isset($_POST['proses'])) {
        include "conn.php";
        $id_pembeli = $d['id_pembeli'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $alamat_pembeli = $_POST['alamat_pembeli'];

        $query = "UPDATE pembeli SET 
        username='$username', 
        password='$password',
        email='$email',
        alamat_pembeli='$alamat_pembeli'
        WHERE id_pembeli='$id_pembeli'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("location:index-pembeli.php");
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    ?>
</body>

</html>