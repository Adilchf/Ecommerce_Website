<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Frontend\FrontController;




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

Route::get('/', [App\Http\Controllers\Frontend\FrontController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 Route::middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');
    Route::get('/categories', 'App\Http\Controllers\Admin\CategoryController@index');
    Route::get('/add-category', 'App\Http\Controllers\Admin\CategoryController@add');
    Route::post('/insert-category','App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('/products', 'App\Http\Controllers\Admin\ProductsController@index');
    Route::get('/add-product', 'App\Http\Controllers\Admin\ProductsController@add');
    Route::post('/insert-product','App\Http\Controllers\Admin\ProductsController@insert');


 });
