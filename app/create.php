<?php

require __DIR__ . '/../vendor/autoload.php';

if ($argv) {
    $paramsConcole = $argv;
}

new \Src\CreateItem($paramsConcole);

