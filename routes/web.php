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

// Route::get('/register', function () {
//     return view('register');
// });

Auth::routes();
// Route::post('/register', 'RegisterController@create');


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


//ADMINISTRADOR - CATEGORIAS//
//LISTADO//
Route::get('/administration/categories', 'AdministrationController@listCategories');

//CREAR//
Route::get('/administration/categories/new', 'AdministrationController@newCategory');

//CREAR y GUARDAR//
Route::post('/administration/categories/new', 'AdministrationController@storeCategory');

//EDITAR//
Route::get('/administration/categories/{id}', 'AdministrationController@editCategory')->name('editCategory');

//EDITAR y GUARDAR//
Route::put('/administration/categories/{id}', 'AdministrationController@updateCategory')->name('updateCategory');

//ELIMINAR//
Route::get('/administration/categories/delete/{id}', 'AdministrationController@deleteCategory')->name('deleteCategory');
