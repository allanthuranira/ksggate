<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('ksggds', ksggdController::class);
    $router->resource('ksgstaffs', ksgstaffController::class);
    $router->resource('lds', ldController::class);
    $router->resource('mds', mdController::class);
    $router->resource('participants', participantsController::class);
    $router->resource('visitors', visitorsController::class);






});
