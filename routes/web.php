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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administration', 'AdministrationController@index')->name('administration');
Route::get('/administration/products', 'AdministrationController@listProducts')->name('listProducts');
Route::get('/administration/products/new', 'AdministrationController@newProduct')->name('newProduct');
Route::get('/administration/products/create', 'MoviesController@create')->middleware('auth');
Route::post('/movies/create', 'MoviesController@store');
