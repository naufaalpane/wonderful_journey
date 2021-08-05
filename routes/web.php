<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/about_us', 'HomeController@about');
Route::get('/detail/{articleId}', 'HomeController@detail');
Route::get('/category/{categoryId}', 'HomeController@categorySort');
Route::get('/view_all_user', 'UserController@viewAll');
Route::get('/deleteuser/{userId}', 'UserController@delete');
Route::get('/update_user/{userId}', 'UserController@viewUpdate');
Route::get('/blogs', 'ArticlesController@blogsView');
Route::get('/deletearticle/{articleId}', 'ArticlesController@delete');
Route::get('/create', 'ArticlesController@createView');
Route::post('/createarticle', 'ArticlesController@create');
Route::post('/update/{userId}', 'UserController@update');
