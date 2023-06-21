<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth']], function () {

  Route::prefix('admin')->namespace('Admin')->group(function () {

    Route::prefix('produtos')->group(function(){
      Route::get('/', 'ProdutoController@index')->name('produtos.index');
      Route::get('/new', 'ProdutoController@new')->name('produtos.new');
      Route::post('/store', 'ProdutoController@store')->name('produtos.store');
      Route::get('/edit/{produto}', 'ProdutoController@edit')->name('produtos.edit');
      Route::post('/update/{codigo}', 'ProdutoController@update')->name('produtos.update');
      Route::get('/remove/{codigo}', 'ProdutoController@delete')->name('produtos.delete');
    });

    Route::prefix('cores')->group(function(){
      Route::get('/', 'CorController@index')->name('cores.index');
      Route::get('/new', 'CorController@new')->name('cores.new');
      Route::post('/store', 'CorController@store')->name('cores.store');
      Route::get('/edit/{cor}', 'CorController@edit')->name('cores.edit');
      Route::post('/update/{codigo}', 'CorController@update')->name('cores.update');
      Route::get('/remove/{codigo}', 'CorController@delete')->name('cores.delete');
    });

    Route::prefix('categorias')->group(function(){
      Route::get('/', 'CategoriaController@index')->name('categorias.index');
      Route::get('/new', 'CategoriaController@new')->name('categorias.new');
      Route::post('/store', 'CategoriaController@store')->name('categorias.store');
      Route::get('/edit/{Categoria}', 'CategoriaController@edit')->name('categorias.edit');
      Route::post('/update/{codigo}', 'CategoriaController@update')->name('categorias.update');
      Route::get('/remove/{codigo}', 'CategoriaController@delete')->name('categorias.delete');
    });

    Route::prefix('users')->group(function(){
      Route::get('/', 'UserController@index')->name('user.index');
      Route::get('/new', 'UserController@new')->name('user.new');
      Route::post('/store', 'UserController@store')->name('user.store');
      Route::get('/edit/{user}', 'UserController@edit')->name('user.edit');
      Route::post('/update/{id}', 'UserController@update')->name('user.update');
      Route::get('/remove/{id}', 'UserController@delete')->name('user.remove');
    });
    
  });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
