<?php

use App\Http\Controllers\Admin\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Front\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontController::class,'index']);



Route::controller(LoginController::class)->prefix('login')->middleware('checkLogedIn')->group(function(){
    Route::get('/', 'getLogin');
    Route::post('/', 'postLogin');
});


Route::prefix('admin')->middleware('checkLogedOut')->group(function(){
    Route::get('/home',[HomeController::class,'getHome']);
    Route::get('/logout',[HomeController::class,'getLogout']);
    Route::prefix('genre')->controller(GenreController::class)->group(function(){
        Route::get('/','getGenre');
        Route::post('/post', 'postGenre');
        Route::get('/delete/{id}', 'deleteGenre');
        Route::get('/edit/{id}', 'getEditGenre');
        Route::post('/edit/{id}', 'postEditGenre');
    });

    Route::prefix('movie')->controller(MovieController::class)->group(function(){
        Route::get('/','getMovies');
        Route::get('/add','getAddMovie');
        Route::post('/post','postMovie');
        Route::get('/delete/{id}','deleteMovie');
    });
});
