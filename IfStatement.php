<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >=80){
    echo "Nilai Anda A". PHP_EOL;
}elseif($nilai >=70 && $absen >=70){
    echo "Nilai Anda B". PHP_EOL;
}elseif($nilai >=60 && $absen >=60) {
    echo "Nilai Anda C" . PHP_EOL;
}else{
    echo "Silakan Mengulang Program Belajar Fordev". PHP_EOL;
}

// Alternatif
if ($nilai >= 80 && $absen >=80):
    echo "Nilai Anda A". PHP_EOL;
elseif($nilai >=70 && $absen >=70):
    echo "Nilai Anda B". PHP_EOL;
elseif($nilai >=60 && $absen >=60) :
    echo "Nilai Anda C" . PHP_EOL;
else:
    echo "Silakan Mengulang Program Belajar Fordev". PHP_EOL;
endif;