<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi detail buku</title>
</head>
<body>
    <ul>
        <li><img src="img/<?php echo $bk["Gambar"]; ?>" width="150px"></li>
        <b><li><?php echo $_GET["Judul Buku"]; ?> </li></b>
        <li>Penulis : <?php echo $bk["Penulis"]; ?> </li>
        <li>Penerbit : <?php echo $bk["Penerbit"]; ?> </li>
        <li>Harga : <?php echo $bk["Harga"]; ?> </li>
        <li>Deskripsi : <?php echo $bk["Deskripsi"]; ?> </li>
    </ul>
</body>
</html>