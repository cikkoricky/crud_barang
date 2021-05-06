<?php
include "database.php";
$kode = $_REQUEST['kode'];
mysqli_query($db,"delete from produk where kode = '$kode'");
header("location:barang.php");
?>