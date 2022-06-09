<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if (isset($_POST["submit"])): ?>
    <h1>Anda Login Sebagai : <?php echo $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <form action="" method="post">
        Masukkan Nama Anda :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">KIRIM DATA</button>
    </form>
</body>
</html>