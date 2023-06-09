<!DOCTYPE html>
<html>

<head>
    <title>EDIT TRANSAKSI</title>
</head>

<body>
    <style>
        img {
            width: 150px;
        }
    </style>
    <h2>CRUD DATA TRANSAKSI</h2>
    <a href="index-transaksi.php">KEMBALI</a>
    <h3>EDIT DATA TRANSAKSI</h3>

    <?php
    include 'conn.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM transaksi WHERE id_transaksi = $id LIMIT 1";

    $result = mysqli_query($mysqli, $query);

    $d = mysqli_fetch_array($result);

    ?>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>username</td>
                <td>
                    <select name="id_pembeli">
                        <option>--</option>
                        <?php
                        $query_pembeli = mysqli_query($mysqli, "SELECT * FROM pembeli") or die(mysqli_error($mysqli));
                        while ($data_pembeli = mysqli_fetch_array($query_pembeli)) {
                            $selected = ($data_pembeli['id_pembeli'] == $d['id_pembeli']) ? 'selected' : '';
                            echo "<option value='$data_pembeli[id_pembeli]' $selected> $data_pembeli[username]</option>";
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
                        $query_barang = mysqli_query($mysqli, "SELECT * FROM barang") or die(mysqli_error($mysqli));
                        while ($data_barang = mysqli_fetch_array($query_barang)) {
                            $selected = ($data_barang['id_barang'] == $d['id_barang']) ? 'selected' : '';
                            echo "<option value='$data_barang[id_barang]' $selected> $data_barang[nama_barang]</option>";
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
                        $query_pembayaran = mysqli_query($mysqli, "SELECT * FROM pembayaran") or die(mysqli_error($mysqli));
                        while ($data_pembayaran = mysqli_fetch_array($query_pembayaran)) {
                            $selected = ($data_pembayaran['id_pembayaran'] == $d['id_pembayaran']) ? 'selected' : '';
                            echo "<option value='$data_pembayaran[id_pembayaran]' $selected> $data_pembayaran[jenis_pembayaran]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>total_barang</td>
                <td><input type="text" name="total_barang" value="<?php echo $d['total_barang']; ?>"></td>
            </tr>
            <tr>
                <td>total_harga</td>
                <td><input type="text" name="total_harga" value="<?php echo $d['total_harga']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="id_transaksi" value="<?php echo $id; ?>">
                    <input type="submit" value="SIMPAN" name="proses">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        include "conn.php";
        $id_transaksi = $_POST['id_transaksi'];
        $id_pembeli = $_POST['id_pembeli'];
        $id_barang = $_POST['id_barang'];
        $id_pembayaran = $_POST['id_pembayaran'];
        $total_barang = $_POST['total_barang'];
        $total_harga = $_POST['total_harga'];

        $query = "UPDATE transaksi SET
            id_pembeli='$id_pembeli',
            id_barang='$id_barang',
            id_pembayaran='$id_pembayaran',
            total_barang='$total_barang',
            total_harga='$total_harga'
            WHERE id_transaksi='$id_transaksi'";
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