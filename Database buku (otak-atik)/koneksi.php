<?php
    // Koneksi dengan database perpustakaan
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'perpustakaan';
	$koneksi = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');

    // Ambil data tabel perpustakaan
    $result = mysqli_query($koneksi, "SELECT * FROM $dbname");
?>