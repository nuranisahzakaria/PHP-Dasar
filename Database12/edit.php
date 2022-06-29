<?php 
    require "connect.php";

    // Mengambil id dari URL
    $id = $_GET['id'];
    $query = "SELECT * FROM menu WHERE id = $id";
    $data = mysqli_query($koneksi, $query); 

    // Cek tombol submit ubah data
    if (isset($_POST["submit"])){

        // Memasukkan data yang diubah
            $id = $_POST["id"];
            $nama_menu = $_POST["nama_menu"];
            $harga = $_POST["harga"];
            $gambar = $_POST["gambar"];

        // Query ubah data
            $query = "UPDATE menu SET
                    nama_menu = '$nama_menu',
                    harga = '$harga',
                    gambar = '$gambar'
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
    <title>Edit Data Menu</title>
</head>
<body>
    <h1>UBAH DATA PEGAWAI</h1>
    <?php while ($row = mysqli_fetch_assoc($data)): ?>
    <form action="edit.php" method="post"> 

        <!-- Element input yang tidak terlihat -->
        <!-- Untuk mendeteksi ID -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <table>
            <tr>
                <td><label for="nama_menu">NAMA MENU : </label></td>
                <td><input type="text" name="nama_menu" id="nama_menu" value="<?php echo $row['nama']; ?>"></td>
            </tr>
            <tr>
                <td><label for="harga">HARGA : </label></td>
                <td><input type="text" name="harga" id="harga" value="<?php echo $row['harga'] ?>"></td>
            </tr>
            <tr>
                <td><label for="gambar">GAMBAR : </label></td>
                <td><input type="file" name="gambar" id="gambar" value="<?php echo $row['gambar'] ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="submit" onclick="return confirm ('Apakah Data Ini Akan diubah?')">Ubah Data</button></td>
            </tr>
            <?php endwhile; ?>
        </table>
</body>
</html>