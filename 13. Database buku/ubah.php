<?php 
    require "koneksi.php";

    // Mengambil id dari URL
    $id = $_GET['id'];
    $query = "SELECT * FROM buku WHERE id = $id";
    $data = mysqli_query($koneksi, $query); 

    // Cek tombol submit ubah data
    if (isset($_POST["submit"])){

        // Memasukkan data yang diubah
            $id = $_POST["id"];
            $judul_buku = $_POST["judul_buku"];
            $penulis = $_POST["penulis"];
            $penerbit = $_POST["penerbit"];
            $harga = $_POST["harga"];
            $deskripsi = $_POST["deskripsi"];

        // Query ubah data
            $query = "UPDATE menu SET
                    judul_buku = '$judul_buku',
                    penulis = '$penulis',
                    penerbit = '$penerbit',
                    harga = '$harga',
                    deskripsi = '$deskripsi'
                    WHERE id=$id ";

        if (mysqli_query($koneksi, $query)){
            header("Location: index.php");
        } else{
            echo "Edit Data Gagal";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
</head>
<body>
    <h1>UBAH DATA BUKU</h1>
    <?php while ($row = mysqli_fetch_assoc($data)): ?>
    <form action="edit.php" method="post"> 

        <!-- Element input yang tidak terlihat -->
        <!-- Untuk mendeteksi ID -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <table>
            <tr>
                <td><label for="judul_buku">Judul Buku : </label></td>
                <td><input type="text" name="judul_buku" id="judul_buku" value="<?php echo $row['nama']; ?>"></td>
            </tr>
            <tr>
                <td><label for="penulis">Penulis : </label></td>
                <td><input type="text" name="penulis" id="penulis" value="<?php echo $row['penulis'] ?>"></td>
            </tr>
            <tr>
                <td><label for="penerbit">Penerbit : </label></td>
                <td><input type="text" name="penerbit" id="penerbit" value="<?php echo $row['penerbit'] ?>"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga : </label></td>
                <td><input type="text" name="harga" id="harga" value="<?php echo $row['harga'] ?>"></td>
            </tr>
            <tr>
                <td><label for="deskripsi">Deskripsi : </label></td>
                <td><input type="text" name="deskripsi" id="deskripsi" value="<?php echo $row['deskripsi'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit" onclick="return confirm ('Apakah Data Ini Akan diubah?')">Ubah Data</button></td>
            </tr>
            <?php endwhile; ?>
        </table>
</body>
</html>