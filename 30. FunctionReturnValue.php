<?php

function sum(int $satu, int $dua): int
{
    $total = $satu + $dua;
    return $total;
}

$result = sum(10,10);
var_dump($result);

function getFinalValue(int $value): string
{
    if ($value >= 80 ){
        return "A";
    }elseif ($value >= 70){
        return "B";
    }elseif ($value >= 60 ){
        return "C";
    }else{
        return "D";
    }
    // Tidak akan di eksekusi jika ada return value diatasnya
    echo "ups".PHP_EOL ;
}

$score = getFinalValue(90);
var_dump($score);
