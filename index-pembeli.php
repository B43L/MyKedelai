<html>

<head>
    <title>Menampilkan Tabel</title>
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
    <h1>Menampilkan Pembeli</h1>
    <h3>Data Pembeli</h3>
    <a href="index-admin.php">KEMBALI</a>
    <br>
    <br>
    <a href="tambah-pembeli.php">+ Tambah Pembeli</a>
    <br>
    <br>
    <table border="1" class="table">
        <tr>
            <th>no</th>
            <th>nama pembeli</th>
            <th>password</th>
            <th>email</th>
            <th>alamat pembeli</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "conn.php";
        $query_mysqli = mysqli_query($mysqli, "SELECT * from pembeli") or die(mysqli_error($mysqli));
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
                    <?php echo $data['password']; ?>
                </td>
                <td>
                    <?php echo $data['email']; ?>
                </td>
                <td>
                    <?php echo $data['alamat_pembeli']; ?>
                </td>
                <td>
                    <a href="edit-pembeli.php?id=<?php echo $data['id_pembeli']; ?>">EDIT</a>
                    <a href="hapus-pembeli.php?id=<?php echo $data['id_pembeli']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>