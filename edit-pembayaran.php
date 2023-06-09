<!DOCTYPE html>
<html>

<head>
    <title>EDIT PEMBAYARAN</title>
</head>

<body>
    <style>
        img {
            width: 150px;
        }
    </style>
    <h2>CRUD DATA PEMBAYRAN</h2>
    <a href="index-pembayaran.php">KEMBALI</a>
    <h3>EDIT DATA PEMBAYARAN</h3>

    <?php
    include 'conn.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM pembayaran WHERE id_pembayaran = $id LIMIT 1";

    $result = mysqli_query($mysqli, $query);

    $d = mysqli_fetch_array($result);

    ?>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Jenis Pembayaran</td>
                <td>
                    <input type="text" name="jenis_pembayaran" value="<?php echo $d['jenis_pembayaran']; ?>">
                </td>
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
        $id_pembayaran = $d['id_pembayaran'];
        $jenis_pembayaran = $_POST['jenis_pembayaran'];

        $query = "UPDATE pembayaran SET 
        jenis_pembayaran='$jenis_pembayaran'
        WHERE id_pembayaran='$id_pembayaran'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("location:index-pembayaran.php");
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    ?>
</body>

</html>