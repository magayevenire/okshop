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

//Sommaire
Route::get('/', "App\Http\Controllers\shop\maincontroller@index")->name('homepage');
Route::get('/produit/{ref}','App\Http\Controllers\shop\maincontroller@produit')->name('voir_produit');
Route::get('/categorie/{id}','App\Http\Controllers\shop\maincontroller@viewByCategory')->name('voir_produit_par_cat');
Route::get('/tag/{id}','App\Http\Controllers\shop\maincontroller@viewByTag')->name('voir_produit_par_tag');

//Panier
Route::post('/panier/add/{ref}','App\Http\Controllers\shop\cartcontroller@add')->name('cart_add');
Route::get('/panier','App\Http\Controllers\shop\cartcontroller@index')->name('cart_index');
Route::get('/panier/update','App\Http\Controllers\shop\cartcontroller@updateCart')->name('cart.update');
Route::post('/panier/remove','App\Http\Controllers\shop\cartcontroller@removeCart')->name('cart.remove');
Route::post('/panier/vider','App\Http\Controllers\shop\cartcontroller@clearAllCart')->name('cart.clear');
Route::post('/panier/paie','App\Http\Controllers\shop\cartcontroller@paiepaniervide')->name('paiepaniervide');
//Authentifiacation
Route::get('/inscription','App\Http\Controllers\Auth\AuthenticatedSessionController@inscription')->name('inscription');
Route::get('/deconnexion','App\Http\Controllers\Auth\AuthenticatedSessionController@destroy')->name('deconnexion');

//Admin
Route::get('/board', "App\Http\Controllers\adminController@board")->name('board');
Route::get('/newprod', "App\Http\Controllers\adminController@addprod")->name('newprod');
Route::get('/updateprod', "App\Http\Controllers\adminController@updateprod")->name('updateprod');
Route::get('/voirclient', "App\Http\Controllers\adminController@client")->name('voir_client');
Route::get('/clientlist', "App\Http\Controllers\adminCcontroller@clientlist")->name('clientlist');
Route::get('/commandes', "App\Http\Controllers\adminController@commande")->name('commandes');
Route::get('/validercommandes', "App\Http\Controllers\adminController@valcom")->name('valider_commandes');


//Paiment
Route::get('/payment', "App\Http\Controllers\paymentController@index")->name('payment.index');
Route::get('/payment/val{id_p}', "App\Http\Controllers\paymentController@store")->name('payment.val');
Route::get('/payment/merci', "App\Http\Controllers\paymentController@merci")->name('merci');
Route::get('/payment/cimer', "App\Http\Controllers\paymentController@cimer")->name('cimer');

Route::get('home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
