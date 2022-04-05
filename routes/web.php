<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\Api\PostController;
use App\Http\Controllers\User\Api\CaptchaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'namespace' => 'App\Http\Controllers\User',
//    'as' => 'user.',
], function () {

    Route::get('/', [IndexController::class, 'index'])->name('user.top');
    Route::post('/api/post/store', [PostController::class, 'store'])->name('api.post.store');
    Route::post('/api/captcha/reload', [CaptchaController::class, 'getCaptchaImageSrc'])->name('api.captcha.reload');
//    Route::get('/post', [PostController::class, 'create'])->name('post.create');
//    Route::post('/post', [PostController::class, 'store'])->name('post.store');
});

