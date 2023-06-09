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
    <a href="tambah-supplier.php">+ Tambah Supplier</a>
    <br>
    <br>
    <table border="1" class="table">
        <tr>
            <th>no</th>
            <th>nama supplier</th>
            <th>alamat supplier</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "conn.php";
        $query_mysqli = mysqli_query($mysqli, "SELECT * from supplier") or die(mysqli_error($mysqli));
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysqli)) {
            ?>
            <tr>
                <td>
                    <?php echo $nomor++; ?>
                </td>
                <td>
                    <?php echo $data['nama_supplier']; ?>
                </td>
                <td>
                    <?php echo $data['alamat_supplier']; ?>
                </td>
                <td>
                    <a href="edit-supplier.php?id=<?php echo $data['id_supplier']; ?>">EDIT</a>
                    <a href="hapus-supplier.php?id=<?php echo $data['id_supplier']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>