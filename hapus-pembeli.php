<?php

include 'conn.php';

$id = $_GET['id'];
mysqli_query($mysqli, "delete from pembeli where id_pembeli='$id'");

header("location:index-pembeli.php");

?>