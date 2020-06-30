<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->post('/register_kernet', 'AuthController@register_kernet' );
$app->post('/register_penumpang', 'AuthController@register_penumpang' );
$app->post('/login', 'AuthController@login');
$app->get('/users/{id}', 'UserController@show');