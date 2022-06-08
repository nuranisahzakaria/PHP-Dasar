<?php
    $pegawai = [
        [
            "nama" => "Nura",
            "nip" => "2001700152",
            "pendidikan" => "S1-Teknik Informayika",
            "jabatan" => "Kepala Puskom",
            "foto" => "nura.jpg"
        ],
        [
            "nama" => "Nisa",
            "nip" => "2001700152",
            "pendidikan" => "S1-Teknik Informayika",
            "jabatan" => "Kabid SDM",
            "foto" => "nisa.jpg"
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>DAFTAR STATUS PEGAWAI</h1>
    <ul>
        <?php foreach ($pegawai as $pgw):?>
            <li>
            <a href="halaman2.php"><?php echo $pgw["nama"];?></a>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>