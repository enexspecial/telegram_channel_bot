<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/v1/subscribe_chatbot', [
    'as' => 'subscribe_chatbot', 'uses' => 'TelegramController@subscribeUsersChatBot'
]);

$router->post('/v1/subscribe_channel', [
    'as' => 'subscribe_channel', 'uses' => 'TelegramController@subscribeUserToChannel'
]);
