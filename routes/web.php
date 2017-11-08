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
    return view('welcome', ['nombre' => null]);
});

Route::get('/prueba', function () {
	return "Ey!";
});

// Route::get('/prueba/{id}', function ($id) {
// 	return "El id es {$id}";
// });

Route::get('/posts/', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@post');

