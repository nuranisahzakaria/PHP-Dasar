<?php 
    $koneksi = mysqli_connect("localhost", "root", "", "restoran");

    // Ambil data tabel restoran
    $result = mysqli_query($koneksi, "SELECT * FROM restoran");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Restoran</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Nama menu</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
        <tr>
            <td><?php  ?></td>
            <td>Sate Matang</td>
            <td>30000</td>
            <td>Gambar1.jpg</td>
        </tr>
    </table>
</body>
</html>