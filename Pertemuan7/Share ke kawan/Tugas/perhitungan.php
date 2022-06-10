<?php
// Nama : NUR ANISAH
// NIM  : 200170015
// MK   : A2-Pemograman Web

	error_reporting(0);

    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];

    if (isset($_POST['tambah'])){
        $hasil = $bilangan1 + $bilangan2;
    }
    if (isset($_POST['kurang'])){
        $hasil = $bilangan1 - $bilangan2;
    }
    if (isset($_POST['kali'])){
        $hasil = $bilangan1 * $bilangan2;
    }
    if (isset($_POST['bagi'])){
        $hasil = $bilangan1 / $bilangan2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="" method="POST">
        <li>
            <label for="bilangan1">Nilai pertama :</label>
            <input type="text" name="bilangan1" id="bilangan1">
        </li>
        <li>
            <label for="bilangan2">Nilai kedua   :</label>
            <input type="text" name="bilangan2" id="bilangan2">
        </li>
        <li>
            <button type="tambah" name="tambah">Tambah</button>
        </li>
        <li>
            <button type="kurang" name="kurang">Kurang</button>
        </li>
        <li>
            <button type="kali" name="kali">Kali</button>
        </li>
        <li>
            <button type="bagi" name="bagi">Bagi</button>
        </li>
        </form>
        <?php echo "Hasil perhitungan $hasil" ?> 
</body>
</html>