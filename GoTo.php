<?php

goto a;
echo "Hello World".PHP_EOL;

a:
echo "Hello A".PHP_EOL;

$hitung = 1;

while (true) {
    echo "Halo Selamat Belajar Di Fordev By Mikhael, Ini Perulangan Ke-$hitung" . PHP_EOL;
    $hitung++;
    if ($hitung>10){
       goto end;
    }
}

end:
echo "End Loop";