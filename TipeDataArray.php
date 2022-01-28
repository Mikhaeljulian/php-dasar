<?php
$value = array(1,2,3,4,5);
var_dump($value[2]);

$nama = ["Mikhael","Leo","Timo","Ipan","Sion"];
var_dump($nama[0]);

$team = array(
    "Fullstack" => "Mikhael",
    "Frontend" => "Leo",
    "Backend" => "Irvan",
    "Designer" => "Timo",
    "Marketing" => "Zion"
);

$team2 = [
    "Fullstack" => "Mikhael",
    "Frontend" => "Leo",
    "Backend" => "Irvan",
    "Designer" => "Timo",
    "Marketing" => "Zion"
];

var_dump($team["Fullstack"]);

$team3 = [
    "Fullstack" => "Mikhael",
    "Programmer"=> [
        "Frontend"=>"Leo",
        "Backend"=>"Irvan"
        ],
    "Designer" => "Timo",
    "Marketing" => "Zion"
];

var_dump($team3["Programmer"]);