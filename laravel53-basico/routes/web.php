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

/*
 Route::get('/', 'Site\SiteController@index');
Route::get('/contato', 'Site\SiteController@contato');

Route::get('/categoria/{id}', 'Site\SiteController@categoria');
Route::get('/categoria2/{id?}', 'Site\SiteController@categoriaOp');
*/

Route::group(['namespace'=>'Site'], function (){
    Route::get('/', 'SiteController@index');
    Route::get('/contato', 'SiteController@contato');

    Route::get('/categoria/{id}', 'SiteController@categoria');
    Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');
});

