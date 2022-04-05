<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Api\PostController;
use App\Http\Controllers\User\Api\CaptchaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::group([
//    'namespace' => 'App\Http\Controllers\User\Api',
//    'as' => 'api.',
//], function () {
//    Route::post('/api/post/store', [PostController::class, 'store'])->name('post.store');
//    Route::post('/api/captcha/reload', [CaptchaController::class, 'getCaptchaImageSrc'])->name('captcha.reload');
//});
