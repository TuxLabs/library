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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');

Route::match(['get', 'post'], '/login', 'AuthController@login')->name('login');
Route::post('/register', 'AuthController@register')->name('register');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware', 'prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin');
    Route::group(['prefix' => 'books'], function(){
        Route::get('/list', 'BookController@listBook')->name('books.list');
        Route::post('/add', 'BookController@addBook')->name('books.add');
    });

    Route::group(['prefix' => 'book-categories'], function(){
        Route::get('/list', 'BookController@listBookCategory')->name('book-categories.list');
        Route::post('/add', 'BookController@addBookCategory')->name('book-categories.add');
    });
});
