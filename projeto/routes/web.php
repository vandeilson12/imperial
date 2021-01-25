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

Route::get('/', 'InicialController@index');


Auth::routes();

Broadcast::routes();

$this->put('/notifications-all-read', 'NotificarionController@markAllAsRead');

$this->put('/notifications-read', 'NotificarionController@markAsRead');

$this->get('/notifications', 'NotificarionController@notifications')->name('notifications');



Route::middleware(['auth'])->group(function(){


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/estastistica', 'HomeController@estastistica')->name('estastistica');

Route::get('/produtos', 'HomeController@produtos')->name('produtos');

Route::get('/deletenotific', 'HomeController@notific')->name('home');


Route::resource('/admin', 'AdmController');

Route::resource('/hanburgue', 'AlimentoController');

Route::post('/hanburgue/update/{id}', 'AlimentoController@update');

Route::resource('/cachorro', 'CachorroQuenteController');

Route::post('/cachorro/update/{id}', 'CachorroQuenteController@update');

Route::resource('/alimentos', 'BebidasController');

Route::post('/alimentos/update/{id}', 'BebidasController@update');

Route::resource('/imagenbebida', 'ImagenBebidasController');

Route::post('/imagenbebida/update/{id}', 'ImagenBebidasController@update');

Route::resource('/compras', 'ComprasController');

Route::get('/compras/resumo/{id}', 'ComprasController@resumo');

Route::get('/compras/finalizar/{id}', 'ComprasController@finalizar');

});

//carrinho

Route::resource('/carrinho/create', 'CarrinhoController');

Route::post('/carrinho/cancelar', 'CarrinhoController@nan')->name('carrinho.nan');

Route::post('/carrinho/mais', 'CarrinhoController@mais')->name('carrinho.mais');

Route::get('/carrinhocontrol', 'CarrinhoController@controll');

Route::get('/carrinhocontrol/cancelar/{id}', 'CarrinhoController@destroy');

Route::get('/carrinhocontrol/pedido/{id}', 'CarrinhoController@excluirpedido');

Route::resource('/completar/create', 'ComprarController');

Route::resource('/cartao/create', 'CartaoController');

// Route::get('/home', 'AdmController@index')->name('home');

// Route::get('/homessssws', 'HomeController@index')->name('home');
