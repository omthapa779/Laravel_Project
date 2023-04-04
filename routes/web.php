<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [\App\Http\Controllers\PagesController::class,'home']);
Route::get('/signup',[\App\Http\Controllers\PagesController::class,'signup']);
Route::post('store', [\App\Http\Controllers\PagesController::class, 'store'])->name('store');
Route::get('store', [\App\Http\Controllers\PagesController::class, 'store'])->name('store');


Route::get('/login', '\App\Http\Controllers\StudentNewController@showLoginForm')->name('login');
Route::post('/login', '\App\Http\Controllers\PagesController@login');
Route::post('store1', [\App\Http\Controllers\photouploader::class, 'store1'])->name('store1');
Route::get('store1', [\App\Http\Controllers\photouploader::class, 'store1'])->name('store1');
Route::get('/create', [\App\Http\Controllers\photouploader::class,'create']);
Route::get('/index', '\App\Http\Controllers\photouploader@index');

    Route::group(['middleware' => 'auth'], function () {
    
        Route::get('/edit/{id}',[\App\Http\Controllers\PagesController::class,'edit' ]);
        Route::post('edit',[\App\Http\Controllers\PagesController::class,'update']);
        Route::get('/delete/{id}',[\App\Http\Controllers\PagesController::class,'delete']);
        Route::get('logout', [\App\Http\Controllers\PagesController::class, 'logout'])->name('logout');

    });
    ?>

