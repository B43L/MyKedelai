<!DOCTYPE html>
<html>

<head>
    <title>CRUD DATA TRANSAKSI</title>
</head>

<body>

    <h2>CRUD DATA transaksi </h2>
    <br />
    <a href="index-transaksi.php">KEMBALI</a>
    <br />
    <br />
    <h3>Tambah Data transaksi</h3>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>username</td>
                <td>
                    <select name="id_pembeli">
                        <option>--</option>
                        <?php
                        include "conn.php";
                        $query = mysqli_query($mysqli, "SELECT * FROM pembeli") or die(mysqli_error($mysqli));
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='$data[id_pembeli]'>$data[username]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>barang</td>
                <td>
                    <select name="id_barang">
                        <option>--</option>
                        <?php
                        include "conn.php";
                        $query = mysqli_query($mysqli, "SELECT * FROM barang") or die(mysqli_error($mysqli));
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='$data[id_barang]'>$data[nama_barang]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>jenis pembayaran</td>
                <td>
                    <select name="id_pembayaran">
                        <option>--</option>
                        <?php
                        include "conn.php";
                        $query = mysqli_query($mysqli, "SELECT * FROM pembayaran") or die(mysqli_error($mysqli));
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='$data[id_pembayaran]'>$data[jenis_pembayaran]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>total_barang</td>
                <td><input type="number" name="total_barang"></td>
            </tr>
            <tr>
                <td>total_harga</td>
                <td><input type="number" name="total_harga"></td>
            </tr>
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
        $id_pembeli = $_POST['id_pembeli'];
        $id_barang = $_POST['id_barang'];
        $id_pembayaran = $_POST['id_pembayaran'];
        $total_barang = $_POST['total_barang'];
        $total_harga = $_POST['total_harga'];


        $query = "INSERT INTO transaksi (id_pembeli, id_barang, id_pembayaran, total_barang, total_harga) VALUES ('$id_pembeli', '$id_barang', '$id_pembayaran','$total_barang','$total_harga')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("location:index-transaksi.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>

</html>