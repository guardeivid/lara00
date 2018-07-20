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

/*
Route::get('user', function () {
    return "foo";
});
 
Route::post('user', function () {
    return "bar";
});

Route::get('/usuarios/{id}', function ($id) {
    return "Detalles del usuario: {$id}";
})->where('id', '[0-9+]*');

Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, no tienes apodo";
    }
});

Route::get('uu/{id}', 'NombreController@index');
*/

// php artisan make:controller PostsController --resource

// php artisan route:list

Route::resource('posts', 'PostsController');
Route::post(
    'posts/changeStatus',
    array(
        'as' => 'changeStatus',
        'uses' => 'PostsController@changeStatus'
    ),
    ['only' => ['create', 'edit']]
);
