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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/primeiro-acesso', 'HomeController@firstAccess')->name('primeiro-acesso');
Route::get('/meu-perfil', 'HomeController@profile')->name('meuperfil');
Route::get('/meu-perfil/editar', 'HomeController@editProfile')->name('editarPerfil');
Route::get('/product-fit', 'HomeController@fit')->name('fit');
Route::get('/afiliados', 'HomeController@afiliados')->name('afiliados');
Route::get('/solicitacoes', 'HomeController@solicitacoes')->name('solicitacoes');
Route::get('/grupos', 'HomeController@grupos')->name('grupos');
Route::get('/configuracoes', 'HomeController@config')->name('config');
