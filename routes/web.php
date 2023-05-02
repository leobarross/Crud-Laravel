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
  Route::prefix('admin')->group(function () {
    Route::get('cores', 'Admin\\CorController@index')->name('cores.index');
    Route::get('cores/new', 'Admin\\CorController@new')->name('cores.new');
    Route::post('cores/store', 'Admin\\CorController@store')->name('cores.store');
    Route::get('cores/edit/{cor}', 'Admin\\CorController@edit')->name('cores.edit');
    Route::post('cores/update/{codigo}', 'Admin\\CorController@update')->name('cores.update');
    Route::get('cores/remove/{codigo}', 'Admin\\CorController@delete')->name('cores.delete');
  });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
