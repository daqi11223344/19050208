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

Route::post('/user','User\UserController@index');
Route::post('/login','User\UserController@index2');
Route::post('/loginss','User\UserController@index5');
Route::post('/loginsss','User\UserController@index6');
Route::post('/token','User\UserController@index3');
Route::get('/form','User\UserController@form');
Route::get('/logins','User\UserController@logins');
Route::get('/login2','User\UserController@login2');
Route::get('/login3','User\UserController@login3');
Route::get('/token1','User\UserController@token1');

// APP 登录、注册
Route::post('/reg','User\UserController@reg');
Route::post('/login1','User\UserController@login1');
Route::get('/showData','User\UserController@showData');
Route::get('/auth','User\UserController@auth'); //鉴权

Route::get('/peest','User\UserController@peest');
Route::get('/pest','User\UserController@pest')->middleware('filter','check.token');

Route::get('/md5','User\UserController@md5post');

