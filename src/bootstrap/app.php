<?php

use Slim\Factory\AppFactory;

// require __DIR__ . '/../vendor/autoload.php';
require 'vendor/autoload.php';

$app = AppFactory::create();

require_once '..\app\http\routes.php';
    
$app->run();