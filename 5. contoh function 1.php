<?php
    function salam ($nama = "Nisa"){
        return "Selamat Datang $nama";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" context="width-conteks-width, initial-scale=1.0">
        <title>Function</title>
    </head>
    <body>
        <h1><?php echo salam(); ?></h1>
    </body>
</html>
