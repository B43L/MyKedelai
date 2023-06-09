<?php

include 'conn.php';

$id = $_GET['id'];
mysqli_query($mysqli, "delete from barang where id_barang='$id'");

header("location:index-barang.php");

?>