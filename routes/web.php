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
Route::get('/estufas-coleman','PagesController@estufas')->name('estufas');
Route::get('/linternas-coleman','PagesController@linternas')->name('linternas');
Route::get('/sillas-coleman','PagesController@sillas')->name('sillas');
Route::get('/mesa-y-camastro-coleman','PagesController@mesaCamastro')->name('mesaycamastro');
Route::get('/hieleras-coleman','PagesController@hieleras')->name('hieleras1');
Route::get('/hieleras-coleman/page-2','PagesController@hieleras2')->name('hieleras2');
Route::get('/hieleras-coleman/page-3','PagesController@hieleras3')->name('hieleras3');
Route::get('/casas-de-campaña-coleman','PagesController@casas1')->name('casas1');
Route::get('/casas-de-campaña-coleman/page-2','PagesController@casas2')->name('casas2');
Route::get('/termos-coleman','PagesController@termos')->name('termos');
Route::get('/catalogo',function(){
    return view('catalogo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/regProductos','ProductosController');