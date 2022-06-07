<?php
    function luasLingkaran($jari){
        $luas = 3.14 * $jari * $jari;
        echo "<b>LUAS LINGKARAN ADALAH : $luas cm</b>";
    }

    // Panggil fungsi
    $r = 12;
    echo "JARI-JARI LINGKARAN : $r <br>";
    luasLingkaran($r);
?>