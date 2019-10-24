<?php


namespace App;

class Category
{
    public function getCategory()
    {
        $category = Database::getDatabase();
        return $category->category;
    }
}
