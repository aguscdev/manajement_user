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

Route::get('/login', 'LoginController@index');
Route::post('/login/proses', 'LoginController@proses');
// Route::get('/home', 'LoginController@home');
Route::get('/logout', 'LoginController@logout');
Route::get('/home/home', 'LoginController@home');
Route::get('/admin/index', 'UserController@index');
Route::get('/admin/create', 'UserController@create');
Route::post('/admin/store','UserController@store');
Route::get('/admin/edit/{id}','UserController@edit');
Route::post('/admin/update/{id}','UserController@update');
Route::get('/admin/delete/{id}','UserController@delete');