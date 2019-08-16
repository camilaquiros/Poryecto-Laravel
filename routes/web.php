<?php


Route::get('/', function () {
    return view('index');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', 'RegisterController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ADMINISTRADOR-PRODUCTO//
Route::get('/administration', 'AdministrationController@index')->name('administration');

//LISTADO//
Route::get('/administration/products', 'AdministrationController@listProducts')->name('listProducts');

//CREAR//
Route::get('/administration/products/new', 'AdministrationController@newProduct');

//CREAR y GUARDAR/
Route::post('/administration/products/new', 'AdministrationController@store');

//EDITAR//
Route::get('/administration/products/{id}', 'AdministrationController@editProduct')->name('editProduct');

//EDITAR y GUARDAR//
Route::put('/administration/products/{id}', 'AdministrationController@updateProduct')->name('updateProduct');

//ELIMINAR//
Route::get('/administration/products/delete/{id}', 'AdministrationController@deleteProduct')->name('deleteProduct');

//ADMINISTRADOR - SERVICIOS//
//LISTADO//
Route::get('/administration/services', 'AdministrationController@listServices');

//CREAR//
Route::get('/administration/services/new', 'AdministrationController@newService');

//CREAR y GUARDAR//
Route::post('/administration/services/new', 'AdministrationController@storeService');

//EDITAR//
Route::get('/administration/services/{id}', 'AdministrationController@editService')->name('editService');

//EDITAR y GUARDAR//
Route::put('/administration/services/{id}', 'AdministrationController@updateService')->name('updateService');

//ELIMINAR//
Route::get('/administration/services/delete/{id}', 'AdministrationController@deleteService')->name('deleteService');


//ADMINISTRADOR - SUBCATEGORIAS//
//LISTADO//
Route::get('/administration/subcategories', 'AdministrationController@listSubcategories');

//CREAR//
Route::get('/administration/subcategories/new', 'AdministrationController@newSubcategory');

//CREAR y GUARDAR//
Route::post('/administration/subcategories/new', 'AdministrationController@storeSubcategory');

//EDITAR//
Route::get('/administration/subcategories/{id}', 'AdministrationController@editSubcategory')->name('editSubcategory');

//EDITAR y GUARDAR//
Route::put('/administration/subcategories/{id}', 'AdministrationController@updateSubcategory')->name('updateSubcategory');

//ELIMINAR//
Route::get('/administration/subcategories/delete/{id}', 'AdministrationController@deleteSubcategory')->name('deleteSubcategory');
