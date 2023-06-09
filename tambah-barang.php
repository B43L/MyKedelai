<!DOCTYPE html>
<html>

<head>
    <title>CRUD DATA BARANG</title>
</head>

<body>

    <h2>CRUD DATA BARANG</h2>
    <br />
    <a href="index-barang.php">KEMBALI</a>
    <br />
    <br />
    <h3>Tambah Data Barang</h3>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Stok Barang</td>
                <td><input type="number" name="stok"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>Supplier</td>
                <td>
                    <select name="id_supplier">
                        <option>--</option>
                        <?php
                        include "conn.php";
                        $query = mysqli_query($mysqli, "SELECT * FROM supplier") or die(mysqli_error($mysqli));
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='$data[id_supplier]'>$data[nama_supplier]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>gambar</td>
                <td><input type="file" name="gambar_barang"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" name="proses"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['proses']) && isset($_FILES['gambar_barang'])) {
        include "conn.php";
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $id_supplier = $_POST['id_supplier'];
        $file = $_FILES['gambar_barang']['name'];
        $tmp = $_FILES['gambar_barang']['tmp_name'];
        $destination = "images/" . $file;
        move_uploaded_file($tmp, $destination);

        $query = "INSERT INTO barang (nama_barang, stok, harga, id_supplier, gambar_barang) VALUES ('$nama_barang', '$stok', '$harga', '$id_supplier', '$file')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("location:index-barang.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>

</html>