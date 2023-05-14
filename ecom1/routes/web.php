<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\RoleController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/test', function () {
    return view('test');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
   // Route::get('/produits', 'ProduitController@index');
    //Route::get('/categories', 'CategorieController@index');
   // Route::get('/commandes', 'CommandeController@index');
  //  Route::get('/utilisateurs', 'UtilisateurController@index');
    Route::get('/parametre', 'ParametreController@index');
    Route::post('/parametre', 'ParametreController@store');


    Route::get('/landing', 'LandingController@index');
    
    Route::get('/produits', 'ProduitController@affiche');
    Route::get('/categories', 'CategorieController@affiche');
    Route::get('/commandes', 'CommandeController@affiche');
   // Route::get('/utilisateurs', 'UserController@affiche');

    Route::post('/produits', 'ProduitController@store');
    Route::get('editprod/{id}', 'ProduitController@edit');
    Route::put('update-prod/{id}', 'ProduitController@update');
    Route::get('delete-prod/{id}', 'ProduitController@destroy');

    Route::post('/categories', 'CategorieController@store');
    Route::get('editcat/{id}', 'CategorieController@edit');
    Route::put('update-cat/{id}', 'CategorieController@update');
    Route::get('delete-cat/{id}', 'CategorieController@destroy');

    Route::post('/commandes', 'CommandeController@store');
    Route::get('editcom/{id}', 'CommandeController@edit');
    Route::put('update-com/{id}', 'CommandeController@update');
    Route::get('delete-com/{id}', 'CommandeController@destroy');
     
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::get('delete-user/{id}', 'UserController@destroy');
  
});
/*Route::group(['middleware' => ['auth']], function() {
    
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    });*/
Route::get('/logout', 'UserController@perform');
   



require __DIR__.'/auth.php';
