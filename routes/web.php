<?php

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

Route::get('/', "App\Http\Controllers\shop\maincontroller@index");
Route::get('/produit/{ref}','App\Http\Controllers\shop\maincontroller@produit')->name('voir_produit');
Route::get('/categorie/{id}','App\Http\Controllers\shop\maincontroller@viewByCategory')->name('voir_produit_par_cat');
