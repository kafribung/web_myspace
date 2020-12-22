<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Livewire\Backend\{About, Admin, Blog, BlogCreate, Dashboard};
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
    // Livewire
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('admin', Admin::class)->name('admin');
    Route::get('abouts', About::class)->name('about');
    Route::get('blogs', Blog::class)->name('blog');
    // Controller
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('blogs', [BlogController::class, 'store'])->name('blog.store');
    Route::get('blogs/{blog:slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::patch('blogs/{blog:slug}', [BlogController::class, 'update'])->name('blog.update');
});

// File manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

require __DIR__.'/auth.php';
