<?php
// Nama : NUR ANISAH
// NIM  : 200170015
// MK   : A2-Pemograman Web

	error_reporting(0);
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];

    if (isset($_POST['tambah'])){
        $hasil = $nilai1 + $nilai2;
    }
    if (isset($_POST['kurang'])){
        $hasil = $nilai1 - $nilai2;
    }
    if (isset($_POST['kali'])){
        $hasil = $nilai1 * $nilai2;
    }
    if (isset($_POST['bagi'])){
        $hasil = $nilai1 / $nilai2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Sederhana</title>
</head>
<body>
    <form action="" method="POST">
        <li>
            <label for="nilai1">Masukkan Nilai Pertama :</label>
            <input type="text" name="nilai1" id="nilai1">
        </li>
        <br>
        <li>
            <label for="nilai2">Masukkan Nilai kedua :</label>
            <input type="text" name="nilai2" id="nilai2">
        </li>
        <br>
        <li>
            <label for="">Operasi perhitungan : </label>
            <button type="tambah" name="tambah">+</button>
            <button type="kurang" name="kurang">-</button>
            <button type="kali" name="kali">x</button>
            <button type="bagi" name="bagi">/</button>
        </li>
        <br>
        </form>
        <?php echo "Hasil perhitungan : $hasil" ?> 
</body>
</html>