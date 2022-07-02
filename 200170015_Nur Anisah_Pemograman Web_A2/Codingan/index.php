<?php 
    require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <a href="tambah.php">TAMBAH DATA BUKU</a>
    <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Gambar</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php $i = 1;  ?>
            <?php while ($isi = mysqli_fetch_assoc($result)): ?>

            <td><?php echo $i++; ?></td>
            <td><?php echo $isi["judul_buku"]; ?></td>
            <td><img src="img/<?php echo $isi['gambar'] ?>" width="50px"></td>
            <td><?php echo $isi["penulis"]; ?></td>
            <td><?php echo $isi["penerbit"]; ?></td>
            <td>Rp. <?php echo number_format($isi["harga"]); ?></td>
            <td><?php echo $isi["deskripsi"]; ?></td>
            <td>
                <a href="ubah.php?id=<?php echo $isi ["id"] ?>">Ubah</a>|
                <a href="hapus.php?id=<?php echo $isi ["id"] ?>"
                onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini');">Hapus</a>
            </td>
        </tr>

        <?php endwhile; ?>
    </table>
</body>
</html>