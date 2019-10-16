<?php



require (__DIR__ . "/src/autoload.php");

function debug($print){
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}

if($argv){
    $paramsConcole = $argv;
}
new \app\Create($paramsConcole);
