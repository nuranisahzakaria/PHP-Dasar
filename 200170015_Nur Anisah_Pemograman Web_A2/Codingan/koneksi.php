<?php
    // Koneksi dengan database restoran
    $koneksi = mysqli_connect("localhost", "root", "", "perpustakaan");

    // Ambil data tabel restoran
    $result = mysqli_query($koneksi, "SELECT * FROM buku");
?>