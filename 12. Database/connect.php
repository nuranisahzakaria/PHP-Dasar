<?php
    // Koneksi dengan database restoran
    $koneksi = mysqli_connect("localhost", "root", "", "restoran");

    // Ambil data tabel restoran
    $result = mysqli_query($koneksi, "SELECT * FROM menu");
?>