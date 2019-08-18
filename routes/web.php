<?php


Route::get('/', function () {
    return view('index');
});

Route::get('/search', 'ProductsController@search');

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/profile', function () {
    return view('profile');
});

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



//PRODUCTOS:
//Ruta lista producto
Route::get('/products', 'ProductsController@index')->name('products');

//Ruta detalle producto
Route::get('/products/{id}', 'ProductsController@show')->name('show');

//filter perros
Route::get('/dogs' , 'ProductsController@dogs')->name('dogs');

//filter gatos
Route::get('/cats' , 'ProductsController@cats')->name('cats');

//filter alimentos
Route::get('/food' , 'ProductsController@food')->name('food');

//filter accesorios
Route::get('/accesories' , 'ProductsController@accesories')->name('accesories');

//filter higiene
Route::get('/hygiene' , 'ProductsController@hygiene')->name('hygiene');

//filter salud
Route::get('/health' , 'ProductsController@health')->name('health');

//filter Snacks
Route::get('/snacks' , 'ProductsController@snacks')->name('snacks');
