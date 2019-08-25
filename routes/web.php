<?php


Route::get('/', 'HomeController@productsIndex')->name('index');

//PREGUNTAS FRECUENTES//
Route::get('/faqs', function () {
    return view('faqs');
});

//PREGUNTAS PERFIL//
Route::get('/profile', function () {
    return view('profile');
})->middleware('user');

//NOSOTROS//
Route::get('/nosotros', function () {
    return view('nosotros');
});

//LISTADO DE SERVICIOS//
Route::get('/nosotros', 'ServicesController@servicesUs')->name('servicesUs');

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
// Listar Producto por categoria
#Route::get('/products/category/{}', 'ProductsController@listCategoryProducts')->name('products');
// Listar Producto Por Subcategorio
Route::get('/products/category/{categoryID}', 'ProductsController@listCategory')->name('products');
Route::get('/products/subcategory/{SubCategoryID}', 'ProductsController@listSubCategory')->name('products');
Route::get('/products/category/{categoryID}/{SubCategoryID}', 'ProductsController@listSubCategoryProducts')->name('products');

//Buscar un producto
Route::get('/search', 'ProductsController@search');
Route::get('/product/search', 'ProductsController@search')->name('searchBy');
//Buscar lista productos con oferta
Route::get('/products/offer', 'ProductsController@offer')->name('offer');

//Ruta detalle producto
Route::get('/products/{id}', 'ProductsController@show')->name('show');

//filter perros

// Route::get('/dogs', 'ProductsController@dogs')->name('dogs');
// Route::get('/dogs/Accesorios', 'ProductsController@dogsAccesorios')->name('dogsAccesorios');
// Route::get('/dogs/Alimentos', 'ProductsController@dogsAlimentos')->name('dogsAlimentos');
// Route::get('/dogs/Estetica e higiene', 'ProductsController@dogsEstetica e higiene')->name('dogsEstetica e higiene');
// Route::get('/dogs/Salud', 'ProductsController@dogsSalud')->name('dogsSalud');
// Route::get('/dogs/Snacks', 'ProductsController@dogsSnacks')->name('dogsSnacks');

//filter gatos
// Route::get('/cats', 'ProductsController@cats')->name('cats');
// Route::get('/cats/Accesorios', 'ProductsController@catsAccesorios')->name('catsAccesorios');
// Route::get('/cats/Alimentos', 'ProductsController@catsAlimentos')->name('catsAlimentos');
// Route::get('/cats/Estetica e higiene', 'ProductsController@catsEstetica e higiene')->name('catsEstetica e higiene');
// Route::get('/cats/Salud', 'ProductsController@catsSalud')->name('catsSalud');
// Route::get('/cats/Snacks', 'ProductsController@catsSnacks')->name('catsSnacks');

//filter alimentos
// Route::get('/Alimentos', 'ProductsController@Alimentos')->name('Alimentos');

//filter accesorios
// Route::get('/Accesorios', 'ProductsController@Accesorios')->name('Accesorios');

//filter higiene
// Route::get('/Estetica e higiene', 'ProductsController@Estetica e higiene')->name('Estetica e higiene');

//filter salud
// Route::get('/Salud', 'ProductsController@Salud')->name('Salud');

//filter Snacks
// Route::get('/Snacks', 'ProductsController@Snacks')->name('Snacks');
Route::get('/dogs', 'ProductsController@dogs')->name('dogs');
Route::get('/dogs/Accesorios', 'ProductsController@dogsAccesorios')->name('dogsAccesorios');
Route::get('/dogs/Alimentos', 'ProductsController@dogsAlimentos')->name('dogsAlimentos');
Route::get('/dogs/Estetica', 'ProductsController@dogsEstetica')->name('dogsEstetica');
Route::get('/dogs/Salud', 'ProductsController@dogsSalud')->name('dogsSalud');
Route::get('/dogs/Snacks', 'ProductsController@dogsSnacks')->name('dogsSnacks');

//filter gatos
Route::get('/cats', 'ProductsController@cats')->name('cats');
Route::get('/cats/Accesorios', 'ProductsController@catsAccesorios')->name('catsAccesorios');
Route::get('/cats/Alimentos', 'ProductsController@catsAlimentos')->name('catsAlimentos');
Route::get('/cats/Estetica', 'ProductsController@catsEstetica')->name('catsEstetica');
Route::get('/cats/Salud', 'ProductsController@catsSalud')->name('catsSalud');
Route::get('/cats/Snacks', 'ProductsController@catsSnacks')->name('catsSnacks');

//filter alimentos
Route::get('/Alimentos', 'SubCategoryController@productsAlimentos')->name('Alimentos');

//filter accesorios
Route::get('/Accesorios', 'SubCategoryController@productsAccesorios')->name('Accesorios');

//filter estetica
Route::get('/Estetica', 'SubCategoryController@productsEstetica')->name('Estetica');

//filter salud
Route::get('/Salud', 'SubCategoryController@productsSalud')->name('Salud');

//filter Snacks
Route::get('/Snacks', 'SubCategoryController@productsSnacks')->name('Snacks');

//SERVICIOS:
//Ruta lista Servicios
Route::get('/services', 'ServicesController@services')->name('services');

//USUARIOS - EDITAR//
Route::get('/profile/edit', 'UserController@editUserProfile')->name('editUserProfile');
Route::put('/profile/edit', 'UserController@updateUserProfile')->name('updateUserProfile');
Route::resource('/favorites', 'FavoritesController', ['except' => ['create', 'edit', 'show', 'update']]);
