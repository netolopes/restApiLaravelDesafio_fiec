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


//rota NOVA
//Route::get('clientes/teste', 'ClienteController@teste')->name('clientes.teste');
//cliente nome do controller na url
Route::resource('clientes','ClienteController');



Route::resource('enderecos','EnderecoController');

//Route::get('clientes/index{filter}', 'ClienteController@index')->name('indexEvent');
Route::get('clientes/index/{filter?}', ['as' => 'indexEvent',
                                     'uses' => 'ClienteController@index']);
