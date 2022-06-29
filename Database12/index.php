<?php 
    require 'connect.php';
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
    <table border="2" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama menu</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Status</th>
        </tr>
        <tr>
            <?php $i = 1;  ?>
            <?php while ($isi = mysqli_fetch_assoc($result)): ?>

            <td><?php echo $i++; ?></td>
            <td><?php echo $isi["nama_menu"]; ?></td>
            <td><?php echo $isi["harga"]; ?></td>
            <td><img src="img/<?php echo $isi['gambar'] ?>" width="50px"></td>
            <td><?php echo $isi['status'] == 0? 'Tidak Tersedia':'Tersedia';?></td>
        </tr>

        <?php endwhile; ?>
    </table>
</body>
</html>