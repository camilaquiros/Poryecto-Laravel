<?php


Route::get('/', function () {
    return view('index');
<<<<<<< HEAD
=======
});

Route::get('/faqs', function () {
    return view('faqs');
>>>>>>> cf04c6a67ec4dcf635275d5a4ef3a43e7faa7e74
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ADMINISTRADOR//
//home de administrador//
Route::get('/administration', 'AdministrationController@index')->name('administration');

//listado productos//
Route::get('/administration/products', 'AdministrationController@listProducts')->name('listProducts');

//CREAR nuevo producto//
Route::get('/administration/products/new', 'AdministrationController@newProduct');

//CREAR y GUARDAR nuevo producto/
Route::post('/administration/products/new', 'AdministrationController@store');

//EDITAR un producto//
Route::get('/administration/products/{id}', 'AdministrationController@editProduct')->name('editProduct');

//EDITAR y GUARDAR un producto//
Route::put('/administration/products/{id}', 'AdministrationController@updateProduct')->name('updateProduct');

//ELIMINAR un producto//
Route::get('/administration/products/delete/{id}', 'AdministrationController@deleteProduct')->name('deleteProduct');

//USUARIO FINAL//
//listado productos//
Route::get('/products', 'ProductController@listProducts');
