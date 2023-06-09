<html>

<head>
    <title>Menampilkan Tabel Transaksi</title>
</head>

<body>
    <style>
        h1 {
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <h1>Menampilkan Tabel Transaksi</h1>
    <h3>Data Transaksi</h3>
    <a href="index-admin.php">KEMBALI</a>
    <br>
    <br>
    <a href="tambah-transaksi.php">+ Tambah Transaksi</a>
    <br>
    <br>
    <table border="1" class="table">
        <tr>
            <th>no</th>
            <th>username</th>
            <th>nama barang</th>
            <th>jenis pembayaran</th>
            <th>tanggal pembelian</th>
            <th>total barang</th>
            <th>total harga</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "conn.php";
        $query_mysqli = mysqli_query($mysqli, "SELECT pembeli.username, barang.nama_barang, pembayaran.jenis_pembayaran, transaksi.id_transaksi, transaksi.tanggal_pembelian, transaksi.total_barang, transaksi.total_harga
        FROM pembeli
        JOIN transaksi ON pembeli.id_pembeli = transaksi.id_pembeli
        JOIN barang ON barang.id_barang = transaksi.id_barang
        JOIN pembayaran ON pembayaran.id_pembayaran = transaksi.id_pembayaran
        ORDER BY pembeli.username, barang.nama_barang, pembayaran.jenis_pembayaran;
        ") or die(mysqli_error($conn));
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysqli)) {
            ?>
            <tr>
                <td>
                    <?php echo $nomor++; ?>
                </td>
                <td>
                    <?php echo $data['username']; ?>
                </td>
                <td>
                    <?php echo $data['nama_barang']; ?>
                </td>
                <td>
                    <?php echo $data['jenis_pembayaran']; ?>
                </td>
                <td>
                    <?php echo $data['tanggal_pembelian']; ?>
                </td>
                <td>
                    <?php echo $data['total_barang']; ?>
                </td>
                <td>
                    <?php echo $data['total_harga']; ?>
                </td>
                <td>
                    <a href="edit-transaksi.php?id=<?php echo $data['id_transaksi']; ?>">EDIT</a>
                    <a href="hapus-transaksi.php?id=<?php echo $data['id_transaksi']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>