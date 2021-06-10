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


Route::get('/','PagesController@index')->name('index');
Route::get('/accesorios-coleman-camping','PagesController@accesorios')->name('accesorios');
Route::get('/accesorios-coleman-camping/page-2','PagesController@accesorios2')->name('accesorios2');
Route::get('/bolsas-de-dormir-coleman','PagesController@bolsasDormir')->name('bolsasdormir');
Route::get('/catalogo',function(){
    return view('catalogo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/regProductos','ProductosController');