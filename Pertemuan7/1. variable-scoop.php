<?php
// Variabel local
    $a = 91;
    echo $a;

    function varb(){
        // Variabel local lingkup function
        $b = 89;
        echo $b;

        // Variabel global -> menggunakan keyword global untuk mencari var yg ada diluar
        global $a;
        echo $a;
    }
    
    varb();
?>