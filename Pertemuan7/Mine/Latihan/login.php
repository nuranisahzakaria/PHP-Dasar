<?php
// Nama : NUR ANISAH
// NIM  : 200170015
// MK   : A2-Pemograman Web

    //cek tombol submit
    if (isset($_POST["submit"])){
        //cek username dan password
        if ($_POST["username"] == "admin" && $_POST["password"] == "12345"){
            // Jika benar, masuk ke halaman admin
            header("location:admin.php");
            exit;
        } else {
            // Jika salah. tampil pesan eror
            $error = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMINISTRATOR</title>
</head>
<body>
    <h1>LOGIN ADMINISTRATOR</h1>
    <?php if (isset($error)): ?>
        <p style="color:red">Username atau Password Salah</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
        </form>
    </ul>
</body>
</html>