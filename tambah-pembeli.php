<!DOCTYPE html>
<html>

<head>
    <title>CRUD DATA PEMBELI</title>
</head>

<body>

    <h2>CRUD DATA PEMBELI</h2>
    <br />
    <a href="index-pembeli.php">KEMBALI</a>
    <br />
    <h3>Tambah Data Pembeli</h3>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <td>alamat_pembeli</td>
            <td><input type="text" name="alamat_pembeli"></td>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" name="proses"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['proses'])) {
        include "conn.php";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $alamat_pembeli = $_POST['alamat_pembeli'];

        $query = "INSERT INTO pembeli (username, password, email ,alamat_pembeli) VALUES ('$username','$password','$email', '$alamat_pembeli')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("location:index-pembeli.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>

</html>