<?php

declare(strict_types=1);

#include __DIR__."/../Framework/App.php";
#using composer autoload
require __DIR__."/../../vendor/autoload.php";

use Framework\App;

$app = new App();

$app->get('/', ['App\Controllers\HomeController', 'home']);

dd($app);

return $app;