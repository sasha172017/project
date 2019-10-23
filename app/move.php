<?php

require __DIR__ . '/../vendor/autoload.php';

$params['id'] = isset($_GET['id']) ? intval($_GET['id']) : null;
$params['id_category'] = isset($_GET['id_category']) ? intval($_GET['id_category']) : null;

new \App\MoveItem($params);
