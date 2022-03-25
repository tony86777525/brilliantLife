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
    ], function (Router $router) {
        $router->resource('sections', SectionController::class);
        $router->resource('section/sliders', SectionSliderController::class);

        // ckedit image upload
//        $router->post('ckeditor/upload','Api\CkeditorUploadController@uploadImage');
//
//        $router->resource('teachers', TeacherController::class);
//
//        $router->resource('courses', CourseController::class);
//
//        $router->resource('curriculums', CurriculumController::class);
//
//        $router->get('curriculums/{id}/edit', 'CurriculumController@edit')->name('curriculums.edit');
//
//        $router->resource('moondays', MoonDayController::class);
//
//        $router->get('download/moonDayExampleDownload', 'Api\DownloadController@moonDayExampleDownload')->name('download.moonDayExampleDownload');
    });
});
