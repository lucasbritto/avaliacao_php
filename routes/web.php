<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware'=> 'web'] , function (){

    Route::get('/', ['as'=>'home.cadastro' , 'uses'=>'cadastroController@index']);

    Auth::routes();

    Route::get('/home', ['as'=>'home' , 'uses'=>'HomeController@index']);

    Route::get('/cadastrar', ['as'=>'cadastrar.cliente.form' , 'uses'=>'cadastroController@form']);
    Route::post('/cadastro' ,['as'=>'cadastrar.cliente' , 'uses'=>'cadastroController@criar']);

    Route::get('/cadastro/editar/{id}',['as'=>'cadastrar.cliente.editar','uses'=>'cadastroController@editar']);
    Route::put('/cadastro/atualizar/{id}',['as'=>'cadastrar.cliente.atualizar','uses'=>'cadastroController@atualizar']);
    Route::get('/cadastro/deletar/{id}',['as'=>'cadastrar.cliente.deletar','uses'=>'cadastroController@deletar']);


});

