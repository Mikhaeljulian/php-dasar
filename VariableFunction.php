<?php

function satu()
{
    echo "SATU";
}

function dua()
{
    echo "DUA";
}

// Kemampuan Memanggil Value Dari Function
$fungsisatu = "satu";
$fungsisatu();function sum(int $satu, int $dua)
{
    $total = $satu + $dua;
    return $total;
}

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo " Hello $finalName".PHP_EOL;
}

function sampleFunction(string  $name):string{
    return "Sample $name";
}
sayHello("Mikhael", "sampleFunction");
sayHello("Mikhael", "strtoupper");
sayHello("Mikhael", "strtolower");