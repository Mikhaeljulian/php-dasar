<?php

$nama = "mikhael";
$umur = null;
$alamat = null;

echo "Apakah Data Nya Kosong = ";
var_dump(is_null($umur));

$rumah = "Jakarta";
unset($rumah);
var_dump(isset($rumah));
