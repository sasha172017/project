<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('index', new Routing\Route('/', array(
    '_controller' => 'Controller\ItemController::indexAction',
)));

$routes->add('create', new Routing\Route('/create/{name}/{id_category}/{price}/{qty}', array(
    'name' => 'mouse',
    'id_category' => 3,
    'price' => 23.75,
    'qty' => 5,
    '_controller' => 'Controller\ItemController::createAction',
)));

$routes->add('move', new Routing\Route('/move/{id}/{id_category}', array(
    'id' => 1,
    'id_category' => 3,
    '_controller' => 'Controller\ItemController::moveAction',
)));


return $routes;