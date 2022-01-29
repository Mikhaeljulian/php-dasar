<?php
$data = [
    "action"=>"Create"
];

//Versi If Isset
if (isset($data["action"])){
    $action = $data["action"];
}else {
    $action = "Nothing";
}

//Versi Null Coalescing Operator
$action = $data["action"]??"Nothing";
echo $action.PHP_EOL;