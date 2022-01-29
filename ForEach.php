<?php
$nama = ["Mikhael","Leo","Timo","Zion","Ipan"];

for ($i = 0 ; $i < count($nama); $i++){
    echo "Data Ke $i = $nama[$i]".PHP_EOL;
}

foreach ($nama as $namaa){
    echo "Data $namaa".PHP_EOL;
}

$team = [
    "frontend" => "Moti",
    "backend" => "Mikhael",
    "design" => "Leo"
];

foreach ($team as $key => $value){
    echo "$key : $value". PHP_EOL;
}