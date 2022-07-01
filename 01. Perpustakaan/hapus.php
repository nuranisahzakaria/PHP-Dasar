<?php
require "koneksi.php";

$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM buku WHERE id = '$id'");

header("location:index.php");

?>