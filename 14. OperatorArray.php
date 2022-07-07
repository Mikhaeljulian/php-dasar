<?php
/*
$a + $b = Union = Menggabungkan Array A dan Array B
$a == $b = Equality = True jika $a dan $b key value sama tanpa memperhatikan posisi
$a === $b = Identity = True jika $a dan $b key value dan posisinya sama
$a != $b = Inequality = True jika $a dan $b tidak sama
$a <> $b = Inequality = True jika $a dan $b tidak sama
$a !== $b = Nonidentity = True jika $a dan $b tidak identik
*/

$first = [
    "first_name" => "Mikhael"
];

$last = [
    "last_name" => "Julian"
];

var_dump($first == $last);
var_dump($first != $last);

$name = $first + $last;
var_dump($name);

