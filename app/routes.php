<?php

$container['notFoundHandler'] = function ($container) {
    return function ($request, $response) use ($container) {
        return $response->withHeader('Content-Type', 'text/html')
            ->withStatus(404);
    };
};
use App\Controllers\PagesController;

$app->get('/', PagesController::class . ':getIndex')->setName("getIndex");
