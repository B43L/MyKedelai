<!DOCTYPE html>
<html>

<head>
    <title>EDIT BARANG</title>
</head>

<body>
    <style>
        img {
            width: 150px;
        }
    </style>
    <h2>CRUD DATA SUPPLIER</h2>
    <a href="index-supplier.php">KEMBALI</a>
    <h3>EDIT DATA SUPPLIER</h3>

    <?php
    include 'conn.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM supplier WHERE id_supplier = $id LIMIT 1";

    $result = mysqli_query($mysqli, $query);

    $d = mysqli_fetch_array($result);

    ?>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Supplier</td>
                <td>
                    <input type="text" name="nama_supplier" value="<?php echo $d['nama_supplier']; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat Supplier</td>
                <td><input type="text" name="alamat_supplier" value="<?php echo $d['alamat_supplier']; ?>"></td>
            </tr>
            <tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" name="proses"></td>
            </tr>
        </table>
    </form>



    <?php

    if (isset($_POST['proses'])) {
        include "conn.php";
        $id_supplier = $d['id_supplier'];
        $nama_supplier = $_POST['nama_supplier'];
        $alamat_supplier = $_POST['alamat_supplier'];

        $query = "UPDATE supplier SET 
        nama_supplier='$nama_supplier', 
        alamat_supplier='$alamat_supplier'
        WHERE id_supplier='$id_supplier'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("location:index-supplier.php");
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    ?>
</body>

</html>