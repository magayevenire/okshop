<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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

Route::get('/', "App\Http\Controllers\shop\maincontroller@index")->name('homepage');
Route::get('/produit/{ref}','App\Http\Controllers\shop\maincontroller@produit')->name('voir_produit');
Route::get('/categorie/{id}','App\Http\Controllers\shop\maincontroller@viewByCategory')->name('voir_produit_par_cat');
Route::get('/tag/{id}','App\Http\Controllers\shop\maincontroller@viewByTag')->name('voir_produit_par_tag');

//Panier
Route::post('/panier/add/{ref}','App\Http\Controllers\shop\cartcontroller@add')->name('cart_add');
Route::get('/panier','App\Http\Controllers\shop\cartcontroller@index')->name('cart_index');
Route::get('/panier/update','App\Http\Controllers\shop\cartcontroller@updateCart')->name('cart.update');
Route::post('/panier/remove','App\Http\Controllers\shop\cartcontroller@removeCart')->name('cart.remove');
Route::post('/panier','App\Http\Controllers\shop\cartcontroller@clearAllCart')->name('cart.clear');

//Systéme d'authentification
Route::get('/identification','App\Http\Controllers\shop\cartcontroller@identification')->name('identification');
Route::get('/inscription','App\Http\Controllers\shop\authcontroller@inscription')->name('inscription');
Route::get('/connexion','App\Http\Controllers\shop\authcontroller@connexion')->name('connexion');
