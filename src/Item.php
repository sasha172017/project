<?php


namespace src;


class Item extends Main
{
    public function getItem(){
        $stringJson = $this->getDatabase();
        $json = json_decode($stringJson);
        return $json->item;
    }

}