<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\{AboutController, BlogController, CvController, ViewController};

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// About
Route::get('about', AboutController::class);
// Blog
Route::prefix('blog')->group(function(){
    Route::get('', [BlogController::class, 'index']);
    Route::get('/{blog:slug}', [BlogController::class, 'show']);
});
// CV
Route::get('donwload/cv', CvController::class);
// View
Route::get('view/{blog:slug}', [ViewController::class, 'show']);
Route::post('view/{blog:slug}', [ViewController::class, 'store']);
