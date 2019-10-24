<?php


namespace App;


class Page
{
    static function render($nameFile, array $data){
        foreach ($data as $var => $val){
            $$var = $val;
        }
        require (__DIR__ . "/../page/{$nameFile}.php");
    }
}