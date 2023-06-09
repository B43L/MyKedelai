<?php

include 'conn.php';

$id = $_GET['id'];
mysqli_query($mysqli, "delete from pembayaran where id_pembayaran='$id'");

header("location:index-pembayaran.php");

?>