<?php


namespace Controller;
use AllClass\CreateItem;
use AllClass\MoveItem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ItemController
{
    public function indexAction(Request $request)
    {
        extract($request->attributes->all(), EXTR_SKIP);
        ob_start();
        include sprintf(__DIR__.'/../../src/pages/%s.php', $_route);
        return new Response(ob_get_clean());
    }

    public function createAction(Request $request, $name, $id_category, $price, $qty)
    {
        $params['name'] = $name;
        $params['id_category'] = $id_category;
        $params['price'] = $price;
        $params['qty'] = $qty;
        $createItem = new CreateItem($params);
        $allCategory = $createItem->allCategory;
        $allItem = $createItem->allItem;
        extract($request->attributes->all(), EXTR_SKIP);
        ob_start();
        include sprintf(__DIR__.'/../../src/pages/%s.php', $_route);
        return new Response(ob_get_clean());
    }

    public function moveAction(Request $request, $id, $id_category)
    {
        $params['id'] = $id;
        $params['id_category'] = $id_category;
        $moveItem = new MoveItem($params);
        $allCategory = $moveItem->allCategory;
        $allItem = $moveItem->allItem;
        extract($request->attributes->all(), EXTR_SKIP);
        ob_start();
        include sprintf(__DIR__.'/../../src/pages/%s.php', $_route);
        return new Response(ob_get_clean());
    }
}