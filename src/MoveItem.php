<?php


namespace App;


class MoveItem
{
    public static $error = false;

    public function __construct(array $params = null)
    {
        if ($params['id'] && $params['id_category']) {
            $item = new Item();
            $category = new Category();
            $allCategory = $category->getCategory();
            $allItem = $item->getItem();
            foreach ($allItem as $it) {
                if ($params['id'] == $it->id) {
                    $it->id_category = $params['id_category'];
                    break;
                }
            }
            Database::updateItemForDatabace($allItem);
            $newAllItem = $item->getItem();
        } else {
            self::$error = true;
        }
        Page::render('move', [
            'allItem' => $newAllItem,
            'allCategory' => $allCategory
        ]);
    }
}