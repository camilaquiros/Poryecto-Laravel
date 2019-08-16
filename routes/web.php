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

Route::get('/administration/categories/delete/{id}', 'AdministrationController@deleteCategory')->name('deleteCategory');

//Ruta productos
//Route::get('/products', 'ProductsController@index');

Route::get('/products', function () {
	$products = [
    [
          "id" => 1,
          "nombre" => "Colchon",
          "imagen" => "img/Productos/colchon.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 800,
    			"rating" => 1,
    			"noRating" => 4,
    		],
    		[
          "id" => 2,
          "nombre" => "Collar",
          "imagen" => "img/Productos/collar_bandana.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 350,
    			"rating" => 3,
    			"noRating" => 2,
    		],
    		[
          "id" => 3,
          "nombre" => "Correa",
          "imagen" => "img/Productos/correa.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 950,
    			"rating" => 5,
    			"noRating" => 0,
    		],
    		[
          "id" => 4,
          "nombre" => "Cucha",
          "imagen" => "img/Productos/cucha.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 1750,
    			"rating" => 5,
    			"noRating" => 0,
    		],
    		[
          "id" => 5,
          "nombre" => "Hueso para perro",
          "imagen" => "img/Productos/hueso_perro.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 150,
    			"rating" => 2,
    			"noRating" => 3,
    		],
    		[
          "id" => 6,
          "nombre" => "Litera para gato",
          "imagen" => "img/Productos/litera_gatos.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 475,
    			"rating" => 4,
    			"noRating" => 1,
    		],
    		[
          "id" => 7,
          "nombre" => "Plato para gato",
          "imagen" => "img/Productos/platos_gatos.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 546,
    			"rating" => 5,
    			"noRating" => 0,
    		],
    		[
          "id" => 8,
          "nombre" => "Rascador para gato",
          "imagen" => "img/Productos/rascador_gatos.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 1199,
    			"rating" => 5,
    			"noRating" => 0,
    		],
        [
          "id" => 9,
          "nombre" => "Transportador",
          "imagen" => "img/Productos/transportador.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          "precio" => 1950,
    			"rating" => 2,
    			"noRating" => 3,
        ],
    		[
          "id" => 10,
          "nombre" => "Colchon",
          "imagen" => "img/Productos/colchon.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 800,
    			"rating" => 1,
    			"noRating" => 4,
    		],
    		[
          "id" => 11,
          "nombre" => "Collar",
          "imagen" => "img/Productos/collar_bandana.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 350,
    			"rating" => 3,
    			"noRating" => 2,
    		],
    		[
          "id" => 12,
          "nombre" => "Correa",
          "imagen" => "img/Productos/correa.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 950,
    			"rating" => 5,
    			"noRating" => 0,
    		],
    		[
          "id" => 13,
          "nombre" => "Cucha",
          "imagen" => "img/Productos/cucha.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 1750,
    			"rating" => 5,
    			"noRating" => 0,
    		],
    		[
          "id" => 14,
          "nombre" => "Hueso para perro",
          "imagen" => "img/Productos/hueso_perro.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 150,
    			"rating" => 2,
    			"noRating" => 3,
    		],
    		[
          "id" => 15,
          "nombre" => "Litera para gato",
          "imagen" => "img/Productos/litera_gatos.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 475,
    			"rating" => 4,
    			"noRating" => 1,
    		],
    		[
          "id" => 16,
          "nombre" => "Plato para gato",
          "imagen" => "img/Productos/platos_gatos.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 546,
    			"rating" => 5,
    			"noRating" => 0,
    		],
    		[
          "id" => 17,
          "nombre" => "Rascador para gato",
          "imagen" => "img/Productos/rascador_gatos.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 1199,
    			"rating" => 5,
    			"noRating" => 0,
    		],
        [
          "id" => 18,
          "nombre" => "Transportador",
          "imagen" => "img/Productos/transportador.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          "precio" => 1950,
    			"rating" => 2,
    			"noRating" => 3,
        ],
    		[
          "id" => 19,
          "nombre" => "Colchon",
          "imagen" => "img/Productos/colchon.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 800,
    			"rating" => 1,
    			"noRating" => 4,
    		],
    		[
          "id" => 20,
          "nombre" => "Collar",
          "imagen" => "img/Productos/collar_bandana.jpg",
    			"detalle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    			"precio" => 350,
    			"rating" => 3,
    			"noRating" => 2,
    		],
	];
	return view('products', compact('products'));
});




//Ruta detalle producto
//Route::get('/products/{id}', 'ProductsController@show')->name('show');


Route::get('/products/{"id"}', function () {
    return view('productDetail');
});
