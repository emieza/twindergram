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

Route::get('/usuaris', function() {
	// query users
	$users = App\User::all();
	// render
	return view('llista_usuaris', ["users"=>$users] );
});

Route::get('/randompost', function() {
	// query users
	$post = App\Post::find(rand(1,50));
	// render
	return view('post', ["post"=>$post] );
});

Route::get('/newpost', function() {
	return view('newpost');
})->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Totes les rutes del CRUD
Route::resource('postadmin', 'PostController');


