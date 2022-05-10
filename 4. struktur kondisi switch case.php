<?php

// PENENTUAN NAMA HARI
    $day = date("D");
    switch ($day){
        case "Sun" : $hari = "Minggu"; break;
        case "Mon" : $hari = "Senin"; break;
        case "Tue" : $hari = "Selasa"; break;
        case "Wed" : $hari = "Rabu"; break;
        case "Thu" : $hari = "Kamis"; break;
        case "Fri" : $hari = "Jum'at"; break;
        case "Sat" : $hari = "Sabtu"; break;

        default:$hari = "Tidak ada hari";
    }
    echo "Hari ini adalah hari <b>$hari</b><br>";


// PENENTUAN GRADE DARI NILAI VARIABEL
    $nilai = "70";
    switch ($nilai){
        case $nilai >= 90 && $nilai <= 100 : $grade="A"; break;
        case $nilai >= 80 && $nilai <= 89 : $grade="B"; break;
        case $nilai >= 70 && $nilai <= 79 : $grade="C"; break;
        case $nilai >= 60 && $nilai <= 69 : $grade="D"; break;
    }
    echo "Kamu Mendapatkan Nilai $nilai dengan Grade $grade";
?>