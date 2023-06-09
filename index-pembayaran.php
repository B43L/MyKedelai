<html>

<head>
    <title>Menampilkan Tabel Supplier</title>
</head>

<body>
    <style>
        h1 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }
    </style>
    <h1>Menampilkan Tabel</h1>
    <h3>Data Supplier</h3>
    <a href="index-admin.php">KEMBALI</a>
    <br>
    <br>
    <a href="tambah-pembayaran.php">+ Tambah Supplier</a>
    <br>
    <br>
    <table border="1" class="table">
        <tr>
            <th>no</th>
            <th>jenis_pembayaran</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "conn.php";
        $query_mysqli = mysqli_query($mysqli, "SELECT * from pembayaran") or die(mysqli_error($mysqli));
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysqli)) {
            ?>
            <tr>
                <td>
                    <?php echo $nomor++; ?>
                </td>
                <td>
                    <?php echo $data['jenis_pembayaran']; ?>
                </td>
                <td>
                    <a href="edit-pembayaran.php?id=<?php echo $data['id_pembayaran']; ?>">EDIT</a>
                    <a href="hapus-pembayaran.php?id=<?php echo $data['id_pembayaran']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>