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

Route::get('/nome/nome1/nome2/nome3', function (){
    return "Rota Grande";
})->name('rota.nomeada');

Route::any('/any', function (){
    return 'Route Any';
});

Route::match(['get', 'post'],'/match', function (){
   return 'Router Match';
});

Route::post('/post', function (){
    return "Route Post"; // ideal para form's
});

Route::get('/contato', function (){
    return 'Contato';
});

Route::get('/empresa', function (){
    return view('empresa');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return redirect()->route('rota.nomeada');
});