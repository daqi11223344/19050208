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

Route::get('/user','User\UserController@index');
Route::post('/login','User\UserController@index2');
Route::post('/loginss','User\UserController@index5');
Route::post('/loginsss','User\UserController@index6');
Route::post('/token','User\UserController@index3');
Route::get('/form','User\UserController@form');
Route::get('/logins','User\UserController@logins');
Route::get('/login2','User\UserController@login2');
Route::get('/login3','User\UserController@login3');
Route::get('/token1','User\UserController@token1');