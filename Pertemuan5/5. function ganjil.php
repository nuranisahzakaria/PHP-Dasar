<?php
    function tampil_ganjil ($awal, $akhir){
        for ($i=$awal; $i<=$akhir; $i++){
            if ($i % 2 == 1){
                echo "$i ";
            }
        }
    }
    // Panggil Fungsi
    $a = 5;
    $b = 100;
    echo "<b>BILANGAN GANJIL</b> dari $a sampai $b adalah :<br>";
    tampil_ganjil($a, $b);
?>