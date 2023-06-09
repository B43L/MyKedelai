<!DOCTYPE html>
<html>

<head>
    <title>EDIT BARANG</title>
</head>

<body>
    <style>
        img {
            width: 100px;
        }
    </style>

    <h2>CRUD DATA BARANG</h2>
    <br />
    <a href="index-barang.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA BARANG</h3>

    <?php
    include 'conn.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM barang WHERE id_barang = $id LIMIT 1";

    $result = mysqli_query($mysqli, $query);

    $d = mysqli_fetch_array($result);

    ?>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama barang</td>
                <td>
                    <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
                </td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type="number" name="stok" value="<?php echo $d['stok']; ?>"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
            </tr>
            <tr>
                <td>supplier</td>
                <td>
                    <select name="id_supplier">
                        <option>--</option>
                        <?php
                        $query_supplier = mysqli_query($mysqli, "SELECT * FROM supplier") or die(mysqli_error($mysqli));
                        while ($data_supplier = mysqli_fetch_array($query_supplier)) {
                            $selected = ($data_supplier['id_supplier'] == $d['id_supplier']) ? 'selected' : '';
                            echo "<option value='$data_supplier[id_supplier]' $selected> $data_supplier[nama_supplier]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>gambar_barang</td>
                <td><input type="file" name="gambar_barang" value="<?php echo $d['gambar_barang']; ?>">
                    <img src="images/<?php echo $d['gambar_barang']; ?>">
                </td>
            </tr>
            <tr>
                <td>deskripsi_barang</td>
                <td><input type="text" name="deskripsi_barang" value="<?php echo $d['deskripsi_barang']; ?>"></td>
            </tr>
            <tr>
                <td>berat_barang</td>
                <td><input type="text" name="berat_barang" value="<?php echo $d['berat_barang']; ?>"></td>
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
        $id_barang = $d['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $id_supplier = $_POST['id_supplier'];
        $deskripsi_barang = $_POST['deskripsi_barang'];
        $berat_barang = $_POST['berat_barang'];
        $image = $_FILES['gambar_barang']['name'];
        $tmp = $_FILES['gambar_barang']['tmp_name'];
        $destination = "images/" . $image;
        move_uploaded_file($tmp, $destination);

        $query = "UPDATE barang SET 
        nama_barang='$nama_barang', 
        stok='$stok',
        harga='$harga',
        id_supplier='$id_supplier',
        deskripsi_barang='$deskripsi_barang',
        berat_barang='$berat_barang',
        gambar_barang='$image'
        WHERE id_barang='$id_barang'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("location:index-barang.php");
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    ?>
</body>

</html>