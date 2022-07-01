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
    <table border="2" cellpadding="10px">
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
            <?php 
				$result = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id DESC 
				");
				if(mysqli_num_rows($result) > 0){
					while($isi = mysqli_fetch_array($result)){
            ?>
                    <?php $i = 1;  ?>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $isi["judul_buku"]; ?></td>
                    <td><img src="img/<?php echo $isi['gambar'] ?>" width="50px"></td>
                    <td><?php echo $isi["penulis"]; ?></td>
                    <td><?php echo $isi["penerbit"]; ?></td>
                    <td class="harga">Rp. <?php echo number_format($isi['harga']) ?></td>
                    <td><?php echo $isi["deskripsi"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $isi ["id"] ?>">Ubah</a>|
                        <a href="hapus.php?id=<?php echo $isi ["id"] ?>"
                        onclick="return confirm ('Apakah Anda Ingin Menghapus Data Ini');">Hapus</a>
                    </td>
                </tr>

                <?php } } else { ?>
			<p>Produk tidak Ada</p>
		<?php } ?>
    </table>
    <?php print_r($isi['gambar']); ?>
</body>
</html>