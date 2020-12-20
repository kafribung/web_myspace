<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Livewire\Backend\{Admin, Dashboard};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->group(function(){
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::group(['prefix' => 'admin'], function(){
        Route::get('', Admin::class)->name('admin');
        // Route::patch('/{user:email}', Admin::class)->name('admin');
    });
});

require __DIR__.'/auth.php';
