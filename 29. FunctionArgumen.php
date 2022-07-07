<?php

function BilangHalo($nama)
{
    echo "Halo $nama".PHP_EOL;
}

BilangHalo("Mikhael");
BilangHalo("Julian");

// Default Argumen
function BilangHalo2($nama = "Mikhael Julian")
{
    echo "Halo $nama".PHP_EOL;
}
BilangHalo2();

function sum(int $first, int $second){
    $total = $first + $second;
    echo "Total = $first + $second = $total".PHP_EOL;
}
sum(100,100);
sum("100","100");
sum(true,false);

// Cara Satu
function jumlahkan(array $values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total = ". implode(",",$values)." = $total".PHP_EOL;
}
jumlahkan([1,2,3,4,5]);

// Variable Length Argumen List
function jumlahkan2(...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total = ". implode(",",$values)." = $total".PHP_EOL;
}
jumlahkan2(...[1,2,3,4,5]);

// Variable Length Argumen List Ber-Value
function jumlahkan3(...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total = ". implode(",",$values)." = $total".PHP_EOL;
}
$values = [1,2,3,4,5];
jumlahkan3(1,2,3,4,5);
