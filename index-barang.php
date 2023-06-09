<html>

<head>
    <title>Menampilkan Tabel</title>
</head>

<body>
    <style>
        img {
            width: 150px;
        }

        h1 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }
    </style>
    <h1>Menampilkan Tabel</h1>
    <h3>Data barang</h3>
    <a href="index-admin.php">KEMBALI</a>
    <br>
    <br>
    <a href="tambah-barang.php">+ Tambah Barang</a>
    <br>
    <br>
    <table border="1" class="table">
        <tr>
            <th>no</th>
            <th>nama barang</th>
            <th>stok barang</th>
            <th>harga</th>
            <th>nama supplier</th>
            <th>gambar_barang</th>
            <th>deskripsi_barang</th>
            <th>berat_barang</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "conn.php";
        $query_mysqli = mysqli_query($mysqli, "SELECT barang.id_barang, barang.nama_barang, barang.stok, barang.harga, supplier.nama_supplier, barang.gambar_barang, barang.deskripsi_barang, barang.berat_barang FROM barang JOIN supplier ON barang.id_supplier = supplier.id_supplier") or die(mysqli_error($mysqli));
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysqli)) {
            ?>
            <tr>
                <td>
                    <?php echo $nomor++; ?>
                </td>
                <td>
                    <?php echo $data['nama_barang']; ?>
                </td>
                <td>
                    <?php echo $data['stok']; ?>
                </td>
                <td>
                    <?php echo $data['harga']; ?>
                </td>
                <td>
                    <?php echo $data['nama_supplier']; ?>
                </td>
                <td><img src="images/<?php echo $data['gambar_barang']; ?>" />

                </td>
                <td>
                    <?php echo $data['deskripsi_barang']; ?>
                </td>
                <td>
                    <?php echo $data['berat_barang']; ?>
                </td>
                <td>
                    <a href="edit-barang.php?id=<?php echo $data['id_barang']; ?>">EDIT</a>
                    <a href="hapus-barang.php?id=<?php echo $data['id_barang']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>