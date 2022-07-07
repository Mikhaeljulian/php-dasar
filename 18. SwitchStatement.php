<?php

$nilai ="C";

switch ($nilai){
    case "A":
        echo "Anda Lulus Dengan Keren".PHP_EOL;
        break;
    case "B":
        echo "Anda Lulus Dengan Biasa".PHP_EOL;
        break;
    default:
        echo "Mungkin Kurang Pintar".PHP_EOL;
}

//Alternatif

switch ($nilai):
    case "A":
        echo "Anda Lulus Dengan Keren".PHP_EOL;
        break;
    case "B":
        echo "Anda Lulus Dengan Biasa".PHP_EOL;
        break;
    default:
        echo "Mungkin Kurang Pintar".PHP_EOL;
endswitch;
