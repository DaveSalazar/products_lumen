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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//product routes
$app->get('products', 'ProductsController@index');
$app->get('products/{id}', 'ProductsController@show');
$app->put('products/{id}', 'ProductsController@update');
$app->post('products', 'ProductsController@store');
$app->delete('products/{id}', 'ProductsController@destroy');