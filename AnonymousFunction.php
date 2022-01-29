<?php
$tanpanama = function (string $name){
    echo "Hello $name";
};

$tanpanama("Mikhael");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Goodbye $finalName".PHP_EOL;
}

$filtergoodbye = function (string $name):string{
    return strtoupper($name);
};

sayGoodBye("Mikhael", $filtergoodbye );

//Mengakses Variable Luar
$namadepan = "mikhael";
$namabelakang = "julian";

$sayhelomika = function () use($namadepan,$namabelakang){
    echo "Hello $namadepan $namabelakang".PHP_EOL;
};

$sayhelomika();