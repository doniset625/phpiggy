<?php

//phpinfo();

//ini_set('memory_limit', '255M');
//echo ini_get('memory_limit');

//include __DIR__.'/../src/Framework/App.php';
//use Framework\App;
//$app = new App();
//$app->run();

include __DIR__."/../src/App/functions.php";

$app = include __DIR__.'/../src/App/bootstrap.php';
$app -> run();

dd($app);