<?php
    require "koneksi.php";

    // Cek tombol submit
    if (isset($_POST["submit"])){

        // Mengambil data dari form dimasukkan ke variabel
        $judul_buku = $_POST["judul_buku"];
        $gambar = $_POST["gambar"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];
        $harga = $_POST["harga"];
        $deskripsi = $_POST["deskripsi"];

    // Query insert data
        $query = "INSERT INTO buku VALUES
            ('', '$judul_buku', '$gambar','$penulis', '$penerbit', '$harga', '$deskripsi')";

        if (mysqli_query($koneksi, $query)){
            echo '<script>alert("Tambah data berhasil")</script>';
            header("Location: index.php");
        } else{
            echo '<script>alert("Tambah data gagal")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h1>TAMBAH DATA BUKU</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="judul_buku">Judul Buku: </label></td>
                <td><input type="text" name="judul_buku" id="judul_buku"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar : </label></td>
                <td><input type="file" name="gambar" id="gambar" value="<?php echo $row['gambar'] ?>"></td>
            </tr>
            <tr>
                <td><label for="penulis">Penulis : </label></td>
                <td><input type="text" name="penulis" id="penulis"></td>
            </tr>
            <tr>
                <td><label for="penerbit">Penerbit : </label></td>
                <td><input type="text" name="penerbit" id="penerbit"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga : </label></td>
                <td><input type="text" name="harga" id="harga"></td>
            </tr>
            <br>
            <tr>
                <td><label for="deskripsi">Deskripsi : </label></td>
                <td><textarea name="deskripsi" placeholder="Deskripsi" cols="40" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit">Tambah</button></td>
            </tr>
        </table>
    </form>
</body>
</html>