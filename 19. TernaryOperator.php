<?php
$gender = "Cowo";
$halo = null;

//Versi Ternary Operator
$halo = $gender == "Cowo" ? "Hi Bro":"Hi Nona";

//Versi Panjang If Else
if ($gender == "Cowo"){
    $halo = "Hi Bro";
}else{
    $halo = "Hi Nona";
}
echo $halo.PHP_EOL;
