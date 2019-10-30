<?php


namespace AllClass;

use Model\Database;

class Category
{
    public function getCategory()
    {
        $category = Database::getDatabase();
        return $category->category;
    }
}
