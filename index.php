<?php

require_once __DIR__ . '/vendor/autoload.php';

use Anahi\TukiTienda\Controllers\ProductoController;

$controller = new ProductoController();

$controller->index();