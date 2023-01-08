<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use PHPUnit\TextUI\XmlConfiguration\Group;

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

$router->group(['middleware' => 'basicAuth'], function () use ($router) {
    
    $router->get('/pendaftaran', 'ControllerBuku@index');

    $router->post('/pendaftaran','ControllerPendaftaran@create');

    $router->get('/pendaftaran', 'ControllerPendaftaran@index');

    $router->get('/detail/{id}', 'ControllerPendaftaran@detail');

    $router->put('/update/{id}', 'ControllerPendaftaran@update');

    $router->delete('/delete/{id}', 'ControllerPendaftaran@delete');

});