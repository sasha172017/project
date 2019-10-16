<?php


namespace src;


class Category extends Main
{
    public function getCategory(){
        $stringJson = $this->getDatabase();
        $json = json_decode($stringJson);
        return $json->category;
    }
}