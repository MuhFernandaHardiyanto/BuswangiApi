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
$app->get('/show_users/{id}', 'UserController@show_users');
$app->delete('/delete_users/{id}', 'UserController@delete_users');
$app->post('/update_users/{id}', 'UserController@update_users');
$app->post('/update_penumpang/{id}', 'UserController@update_penumpang' );
$app->post('/update_kernet/{id}', 'UserController@update_kernet' );