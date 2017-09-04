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




Route::get('/','HomeController@index');


Route::get('/DeleteUser','HomeController@DeleteUser');


Route::get('/Application-Configuration','HomeController@Appconf');


Route::get('/bankAccountMaster','HomeController@bankAccountMaster');


Route::get('/bankAccountSignatories','HomeController@bankAccountSignatories');


Route::get('/bankMasters','HomeController@bankMasters');


Route::get('/chequeBook','HomeController@chequeBook');


Route::get('/chequeLeaves','HomeController@chequeLeaves');


Route::get('/creditdebit','HomeController@creditdebit');


Route::get('/accountNature','HomeController@accountNature');
