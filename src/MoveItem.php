<?php


namespace Src;


class MoveItem
{
    public $id;
    public $id_category;
    public function __construct(array $paramsConcole = null)
    {
        if ($paramsConcole && count($paramsConcole) == 3) {
            $this->id = $paramsConcole[1];
            $this->id_category = strval($paramsConcole[2]);
            $item = new Item();
            $allItem = $item->getItem();
            foreach ($allItem as $it) {
                if ($this->id == $it->id) {
                    $it->id_category = $this->id_category;
                    break;
                }
            }
            $item->updateItemForDatabace($allItem);
            $this->viewItem();
        } else {
            echo " |--------------------------------|\n";
            echo " |  Error: no parameters          |\n ";
            echo "|  first argument - id item      |\n ";
            echo "|  second argument - id category |\n ";
            echo "|--------------------------------|\n";
        }
    }

    public function viewItem()
    {
        $category = new Category();
        $item = new Item();
        $allItem = $item->getItem();
        $allCategory = $category->getCategory();
        foreach ($allCategory as $cat) {
            echo "\n Category name: $cat->name \n ";
            foreach ($allItem as $it) {
                if ($cat->id == $it->id_category) {
                    echo "\n    | Id: $it->id \n";
                    echo "\n    | Name: $it->name \n";
                    echo "\n    | Price: $it->price \n";
                    echo "\n    | Qty: $it->qty \n";
                    echo "\n ------------ \n";
                }
            }
            echo "\n ------------------------------------- \n";
        }
    }
}