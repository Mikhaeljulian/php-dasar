<?php

function getValue()
{
    return 100;
}

$nilai = getValue();
var_dump($nilai);

$nama = null;

function runApp($nama)
{
    echo "Timo" . PHP_EOL ;
    echo "Timo" . PHP_EOL ;
    echo "Timo" . PHP_EOL ;
}

echo runApp($nama);
