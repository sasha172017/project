<?php


namespace app;


use src\Item;

class Create
{
    public $id;
    public $name;
    public $id_category;
    public $price;
    public $qty;


    public function __construct($paramsConcole = null){
        if($paramsConcole && count($paramsConcole) == 5){
            $this->name = $paramsConcole[1];
            $this->id_category = $paramsConcole[2];
            $this->price = $paramsConcole[3];
            $this->qty = $paramsConcole[4];
            $item = new Item();
            $allItem = $item->getItem();
            $this->setId($allItem);
            $allItem[] =  $this;
            echo $item->updateItemForDatabace($allItem) ? "SUCCESSFUL \n" : "ERROR \n";
        }else{
            echo " |--------------------------------|\n";
            echo " |  Error: no parameters          |\n ";
            echo "|  first argument - name         |\n ";
            echo "|  second argument - id category |\n ";
            echo "|  third argument - price        |\n ";
            echo "|  fourth argument - quantity    |\n ";
            echo "|--------------------------------|\n";
        }
    }

    public function setId(array $array){
        $maxId = 0;
        foreach ($array as $item) {
            if($item->id > $maxId){
                $maxId = $item->id;
            }
        }
        $this->id = strval($maxId + 1);
    }
}

