<!DOCTYPE html>
<html>

<head>
    <title>CRUD DATA SUPPLIER</title>
</head>

<body>

    <h2>CRUD DATA SUPPLIER</h2>
    <br />
    <a href="index-supplier.php">KEMBALI</a>
    <br />
    <h3>Tambah Data Supplier</h3>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Supplier</td>
                <td><input type="text" name="nama_supplier"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_pembeli"></td>
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
        $nama_supplier = $_POST['nama_supplier'];
        $alamat_supplier = $_POST['alamat_supplier'];

        $query = "INSERT INTO supplier (nama_supplier, alamat_supplier) VALUES ('$nama_supplier', '$alamat_supplier')";
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