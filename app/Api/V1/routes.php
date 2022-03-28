<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/v1/test', [
    'as' => 'test', 'uses' => 'TelegramController@test'
]);
