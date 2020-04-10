<?php

use App\Core;
use Slim\App;

require '../vendor/autoload.php';

$app = new App([
    'settings' => [
       'displayErrorDetails' => true
    ]
]);

require '../app/container.php';
require '../app/routes.php';
require '../app/middlewares.php';

$core = new Core($app);
$core->loadApplication();

$app->getContainer()['core'] = $core;

$app->run();