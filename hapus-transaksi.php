<?php

include 'conn.php';

$id = $_GET['id'];
mysqli_query($mysqli, "delete from transaksi where id_transaksi='$id'");

header("location:index-transaksi.php");

?>