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

$router->group(['prefix'=>'api'], function($router)
{
  $router->get('cars','CarsController@index');
  $router->get('cars/{id}','CarsController@show');
  $router->post('cars','CarsController@create');
  $router->post('cars/{id}/edit','CarsController@update');
  $router->post('cars/{id}/delete','CarsController@destroy');
});

$router->group(['prefix'=>'api'], function($router)
{
  $router->get('manufacturers','ManufacturersController@index');
  $router->get('manufacturers/{id}','ManufacturersController@show');
  $router->post('manufacturers','ManufacturersController@create');
  $router->put('manufacturers/{id}/edit','ManufacturersController@update');
  $router->post('manufacturers/{id}/delete','ManufacturersController@destroy');
});
