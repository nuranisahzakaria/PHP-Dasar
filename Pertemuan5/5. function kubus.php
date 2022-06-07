<?php
    function luas_duakubus ($a, $b){
        $luas_a = $a*$a*$a;
        $luas_b = $b*$b*$b;
        $total = $luas_a + $luas_b;
        return "luas kubus adalah $total";
    }
    echo luas_duakubus(4, 9);
?>

<?php
    // function luas_duakubus ($a, $b){
    //     $luas_a = $a*$a*$a;
    //     $luas_b = $b*$b*$b;
    //     return $luas_a + $luas_b; -> keyword return bisa langsung menghitung funsi matematis,
    //                                  sehingga tdk perlu pakai $total
    // }
    // echo luas_duakubus(4, 9);
?>