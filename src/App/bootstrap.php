<?php

declare(strict_types=1);

#include __DIR__."/../Framework/App.php";
#using composer autoload
require __DIR__."/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\HomeController;

$app = new App();

$app->get('/', [HomeController::class, 'home']);

return $app;