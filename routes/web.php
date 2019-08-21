<?php


Route::get('/', 'HomeController@productsIndex')->name('index');

Route::get('/search', 'ProductsController@search');

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware('user');

Route::get('/services', function () {
    return view('services');
});

Route::get('/peluqueria', function () {
    return view('peluqueria');
});

Route::get('/estudios', function () {
    return view('estudios');
});

Route::get('/entrenamiento', function () {
    return view('entrenamiento');
});

Auth::routes();
// Route::post('/register', 'RegisterController@create');

//ADMINISTRADOR-PRODUCTO//
Route::get('/administration', 'AdministrationController@index')->name('administration')->middleware('admin');

//LISTADO//
Route::get('/administration/products', 'AdministrationController@listProducts')->name('listProducts')->middleware('admin');

//CREAR//
Route::get('/administration/products/new', 'AdministrationController@newProduct')->middleware('admin');

//CREAR y GUARDAR/
Route::post('/administration/products/new', 'AdministrationController@store')->middleware('admin');

//EDITAR//
Route::get('/administration/products/{id}', 'AdministrationController@editProduct')->name('editProduct')->middleware('admin');

//EDITAR y GUARDAR//
Route::put('/administration/products/{id}', 'AdministrationController@updateProduct')->name('updateProduct')->middleware('admin');

//ELIMINAR//
Route::get('/administration/products/delete/{id}', 'AdministrationController@deleteProduct')->name('deleteProduct')->middleware('admin');


//ADMINISTRADOR - SERVICIOS//
//LISTADO//
Route::get('/administration/services', 'AdministrationController@listServices')->middleware('admin');

//CREAR//
Route::get('/administration/services/new', 'AdministrationController@newService')->middleware('admin');

//CREAR y GUARDAR//
Route::post('/administration/services/new', 'AdministrationController@storeService')->middleware('admin');

//EDITAR//
Route::get('/administration/services/{id}', 'AdministrationController@editService')->name('editService')->middleware('admin');

//EDITAR y GUARDAR//
Route::put('/administration/services/{id}', 'AdministrationController@updateService')->name('updateService')->middleware('admin');

//ELIMINAR//
Route::get('/administration/services/delete/{id}', 'AdministrationController@deleteService')->name('deleteService')->middleware('admin');


//ADMINISTRADOR - CATEGORIAS//
//LISTADO//
Route::get('/administration/categories', 'AdministrationController@listCategories')->middleware('admin');

//CREAR//
Route::get('/administration/categories/new', 'AdministrationController@newCategory')->middleware('admin');

//CREAR y GUARDAR//
Route::post('/administration/categories/new', 'AdministrationController@storeCategory')->middleware('admin');

//EDITAR//
Route::get('/administration/categories/{id}', 'AdministrationController@editCategory')->name('editCategory')->middleware('admin');

//EDITAR y GUARDAR//
Route::put('/administration/categories/{id}', 'AdministrationController@updateCategory')->name('updateCategory')->middleware('admin');

//ELIMINAR//
Route::get('/administration/categories/delete/{id}', 'AdministrationController@deleteCategory')->name('deleteCategory')->middleware('admin');


//ADMINISTRADOR - SUBCATEGORIAS//
//LISTADO//
Route::get('/administration/subcategories', 'AdministrationController@listSubcategories')->middleware('admin');

//CREAR//
Route::get('/administration/subcategories/new', 'AdministrationController@newSubcategory')->middleware('admin');

//CREAR y GUARDAR//
Route::post('/administration/subcategories/new', 'AdministrationController@storeSubcategory')->middleware('admin');

//EDITAR//
Route::get('/administration/subcategories/{id}', 'AdministrationController@editSubcategory')->name('editSubcategory')->middleware('admin');

//EDITAR y GUARDAR//
Route::put('/administration/subcategories/{id}', 'AdministrationController@updateSubcategory')->name('updateSubcategory')->middleware('admin');

//ELIMINAR//
Route::get('/administration/subcategories/delete/{id}', 'AdministrationController@deleteSubcategory')->name('deleteSubcategory')->middleware('admin');



//PRODUCTOS:
//Ruta lista producto
Route::get('/products', 'ProductsController@index')->name('products');

//Buscar un producto
Route::get('/product/search', 'ProductsController@search')->name('searchBy');

//Ruta detalle producto
Route::get('/products/{id}', 'ProductsController@show')->name('show');



//filter perros
Route::get('/dogs', 'ProductsController@dogs')->name('dogs');
Route::get('/dogs/accesories', 'ProductsController@dogsAccesories')->name('dogsAccesories');
Route::get('/dogs/food', 'ProductsController@dogsFood')->name('dogsFood');
Route::get('/dogs/hygiene', 'ProductsController@dogsHygiene')->name('dogsHygiene');
Route::get('/dogs/health', 'ProductsController@dogsHealth')->name('dogsHealth');
Route::get('/dogs/snacks', 'ProductsController@dogsSnacks')->name('dogsSnacks');

//filter gatos
Route::get('/cats', 'ProductsController@cats')->name('cats');
Route::get('/cats/accesories', 'ProductsController@catsAccesories')->name('catsAccesories');
Route::get('/cats/food', 'ProductsController@catsFood')->name('catsFood');
Route::get('/cats/hygiene', 'ProductsController@catsHygiene')->name('catsHygiene');
Route::get('/cats/health', 'ProductsController@catsHealth')->name('catsHealth');
Route::get('/cats/snacks', 'ProductsController@catsSnacks')->name('catsSnacks');

//filter alimentos
Route::get('/food', 'ProductsController@food')->name('food');

//filter accesorios
Route::get('/accesories', 'ProductsController@accesories')->name('accesories');

//filter higiene
Route::get('/hygiene', 'ProductsController@hygiene')->name('hygiene');

//filter salud
Route::get('/health', 'ProductsController@health')->name('health');

//filter Snacks
Route::get('/snacks', 'ProductsController@snacks')->name('snacks');
