<?php
    if(
        !isset($_GET["nama"]) ||
        !isset($_GET["nip"]) ||
        !isset($_GET["pendidikan"]) ||
        !isset($_GET["jabatan"]) ||
        !isset($_GET["foto"])
    ){
        header("location: halaman1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi pegawai</title>
</head>
<body>
    <ul>
        <li><img src="img/<?php echo $_GET["foto"]; ?>"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nip"] ?></li>
        <li><?php echo $_GET["pendidikan"] ?></</li>
        <li><?php echo $_GET["jabatan"] ?></</li>
    </ul>
    <a href="halaman1.php">Daftar Pegawai</a>
</body>
</html>