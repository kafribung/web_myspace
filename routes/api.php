<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\{AboutController, BlogController, CvController};

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

Route::get('about', AboutController::class);
Route::prefix('blog')->group(function(){
    Route::get('', [BlogController::class, 'index']);
    Route::get('/{blog:slug}', [BlogController::class, 'show']);
});
Route::get('donwload/cv', CvController::class);
