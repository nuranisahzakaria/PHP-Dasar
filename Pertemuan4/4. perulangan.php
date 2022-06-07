<?php
    // PERULANGAN WHILE

        // contoh sintaks while 1
        $a = 1;
        while ($a <= 8){
            echo $a++;
        }
        echo "<br>------------------------------------------<br>";

        // contoh sintaks while 2
        $a = 1;
        while ($a <= 7) : echo "$a ";
        $a++;
        endwhile;
        echo "<br>------------------------------------------<br>";

        // contoh sintaks while 3
        $a = 1;
            while ($a <= 4){
                echo "<h$a>Header $a</h$a>";
                $a++;
            }
        echo "<br>------------------------------------------<br>";

    // PERULANGAN FOR
            
        // contoh sintaks for 1
        for ($a = 1; $a<=9; $a++){
            echo "$a ";
        }
        echo "<br>------------------------------------------<br>";

        // contoh sintaks for 2
        $a = 1;
        for (;;){
            if ($a > 50){
                break;
            }
            echo "$a ";
            $a++;
        }
        echo "<br>------------------------------------------<br>";
        
    // PERULANGAN DO WHILE
        $a = 1;
        do {
            echo "$a ";
            $a+=2;
        }
        while ($a <= 20);
?>