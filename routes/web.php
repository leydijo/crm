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

Route::get('/', function () {
    return view('welcome');
});



    


Auth::routes();

Route::resource('usuario', 'UsersController');

Route::resource('producto', 'AddProductoController');

Route::get('/search', 'SearchController@search' );

//Route::resource('consultar', 'ConsultarProductosController' );

Route::post('consultar/store', 'ConsultarProductosController@store');

//Route::get('/home', 'HomeController@index')->name('home');
