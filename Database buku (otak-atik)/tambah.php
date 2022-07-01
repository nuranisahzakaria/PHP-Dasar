<?php
    require "koneksi.php";

    // Cek tombol submit
    // if (isset($_POST["submit"])){

    //     // Mengambil data dari form dimasukkan ke variabel
    //     $judul_buku = $_POST["judul_buku"];
    //     $gambar = $_POST["gambar"];
    //     $penulis = $_POST["penulis"];
    //     $penerbit = $_POST["penerbit"];
    //     $harga = $_POST["harga"];
    //     $deskripsi = $_POST["deskripsi"];

    //     // Query insert data
    //     $query = "INSERT INTO buku VALUES
    //         ('', '$judul_buku', '$penulis', '$penerbit', '$harga', '$deskripsi')";
    //     mysqli_query($koneksi, $query);
    //}

    if(isset($_POST['submit'])){
        //menampung inputan dari form
        $judul_buku = $_POST["judul_buku"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];
        $harga = $_POST["harga"];
        $deskripsi = $_POST["deskripsi"];

        //menampung data dari file yg diapload
        $filename = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];

        $type1 = explode('.', $filename);
        $type2 = $type1[1];

        $newname = 'buku'.time().'.'.$type2;

        //menampung data format file yang diizinkan
        $tipe_diizinkan = array('jpg','jpeg','png','gif','JPG','JPEG');

        //membuat validasi format file
            move_uploaded_file($tmp_name, './images/'.$newname);
            $insert = mysqli_query($koneksi, "INSERT INTO buku VALUES(
                    null,
                    '".$judul_buku."',
                    '".$penulis."',
                    '".$penerbit."',
                    '".$harga."',
                    '".$deskripsi."',
                    '".$newname."',
                    null
                        ) ");

            if($insert){
                echo '<script>alert("Tambah data berhasil")</script>';
                echo '<script>window.location="data-produk.php"</script>';
            }else{
                echo 'Gagal '.mysqli_error($koneksi);
            }
        //proses upload file sekaligus insert kedatabase

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
                <td><label for="judul_buku">Judul Buku : </label></td>
                <td><input type="text" name="judul_buku" id="judul_buku"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar : </label></td>
                <td><input type="file" required></td>
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
                <td><label for="harga">Deskripsi : </label></td>
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