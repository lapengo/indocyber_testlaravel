<?php

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
 

Route::get("/soalsatu", "SoalduaController@soalsatu"); 
Route::get("/soaldua", "SoalduaController@soaldua");  

Route::resource("users", "UsersController");
Route::resource("produk", "ProdukController");


Route::get("/login", "LoginController@index"); 
Route::get("/check", "LoginController@check"); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test/forbidden', function(){
    abort(403, "Anda tidak memiliki hak akses, Silahkan Lakukan Login!");
});
