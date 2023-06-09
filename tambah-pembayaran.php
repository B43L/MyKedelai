<!DOCTYPE html>
<html>

<head>
    <title>CRUD DATA PEMBAYARAN</title>
</head>

<body>

    <h2>CRUD DATA PEMBAYARAN</h2>
    <br />
    <a href="index-pembayaran.php">KEMBALI</a>
    <br />
    <h3>Tambah Data Supplier</h3>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Jenis pembayaran</td>
                <td><input type="text" name="jenis_pembayaran"></td>
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
        $jenis_pembayaran = $_POST['jenis_pembayaran'];

        $query = "INSERT INTO pembayaran (jenis_pembayaran) VALUES ('$jenis_pembayaran')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("location:index-pembayaran.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>

</html>