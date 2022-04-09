<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

//    $router->get('/', 'HomeController@index')->name('home');

    $router->get('/', 'IndexController@index')->name('home');

    Route::group([
        'namespace'     => 'Bl',
        'middleware'    => 'admin.permission:allow,administrator',
    ], function (Router $router) {
        $router->resource('sections', SectionController::class);
        $router->resource('section/sliders', SectionSliderController::class);

        $router->resource('posts', PostController::class);
    });


    // user
    Route::group([
        'namespace'     => 'User',
        'as'            => 'user.'
    ], function (Router $router) {
        $router->resource('user/sections', SectionController::class);
        $router->resource('user/section/sliders', SectionSliderController::class);

        $router->resource('user/posts', PostController::class);
    });
});
