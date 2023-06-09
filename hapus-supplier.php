<?php

include 'conn.php';

$id = $_GET['id'];
mysqli_query($mysqli, "delete from supplier where id_supplier='$id'");

header("location:index-supplier.php");

?>