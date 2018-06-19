<?php
use App\cat;

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

Route::get('/', 'PublicController@rodyt');

Route::get('nauji', 'PostController@posts');

Route::post('irasai', 'PostController@saugok');

Route::get('/post/{post}', 'PublicController@rodytvisa');

Route::get('/post/{post}/edit', 'PostController@edit');

Route::patch('/post/{post}', 'PostController@update');

Route::get('/post/{post}/delete', 'PostController@delete');

Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/cat/{cat}', 'CatController@rodytCat');

Route::get('/admin','PostController@loadadmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
