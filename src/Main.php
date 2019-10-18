<?php


namespace Src;

class Main
{
    public function getDatabase()
    {
        return file_get_contents("data/database.json");
    }

    public function updateItemForDatabace($array)
    {
        $object = json_decode($this->getDatabase());
        $object->item = $array;
        return file_put_contents("data/database.json", json_encode($object, JSON_PRETTY_PRINT)) ? "SUCCESSFUL" : "ERROR";
    }
}
