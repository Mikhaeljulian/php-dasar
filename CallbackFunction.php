<?php
function sayhello(string $name, callable $filter){
    $finalname = call_user_func($filter,$name);
    echo " Hello $finalname".PHP_EOL;
}

sayhello("Mikhael", "strtoupper");

sayhello("Mikhael", function (string $name):string {
    return strtoupper($name);
});

sayhello("Mikhael", fn($name) => strtoupper($name));