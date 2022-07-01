<?php
require "connect.php";

$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM menu WHERE id = '$id'");

header("location:index.php");

?>