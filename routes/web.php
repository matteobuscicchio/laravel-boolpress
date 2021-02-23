<?php

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

Route::get('/', 'PageController@home')->name('home');
Route::get('articles_api', 'PageController@articles')->name('articles');
Route::get('categories_api', 'PageController@categories')->name('categories');
Route::get('tags_api', 'PageController@tag')->name('tag');

Route::resource('articles', 'ArticlesController');
Route::resource('categories', 'CategoriesController');
Route::resource('tags', 'TagsController');