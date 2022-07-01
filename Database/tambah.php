<?php
    require "connect.php";

    // Cek tombol submit
    if (isset($_POST["submit"])){

        // Mengambil data dari form dimasukkan ke variabel
        $nama_menu = $_POST["nama_menu"];
        $harga = $_POST["harga"];
        $gambar = $_POST["gambar"];

    // Query insert data
        $query = "INSERT INTO menu VALUES
            ('', '$nama', '$harga', '$gambar')";
        mysqli_query($koneksi, $query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Menu</title>
</head>
<body>
    <h1>TAMBAH DATA MENU</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">NAMA MENU : </label></td>
                <td><input type="text" name="nama_menu" id="nama_menu"></td>
            </tr>
            <tr>
                <td><label for="harga">HARGA : </label></td>
                <td><input type="text" name="harga" id="harga"></td>
            </tr>
            <tr>
                <td><label for="gambar">GAMBAR</label></td>
                <td><input type="file" name="gambar" id="gambar"></td>
            </tr>
        </table>
    </form>
</body>
</html>