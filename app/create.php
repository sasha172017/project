<?php

require __DIR__ . '/../vendor/autoload.php';


$params['name'] = isset($_GET['name']) ? strval($_GET['name']) : null;
$params['id_category'] = isset($_GET['id_category']) ? intval($_GET['id_category']) : null;
$params['price'] = isset($_GET['price']) ? floatval($_GET['price']) : null;
$params['qty'] = isset($_GET['qty']) ? intval($_GET['qty']) : null;



new \App\CreateItem($params);

