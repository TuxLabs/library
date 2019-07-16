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

Route::get('/', 'HomeController@index')->name('root');
Route::get('/test', 'HomeController@test')->name('test');

//authentication
Route::match(['get', 'post'], '/login', 'AuthController@login')->name('login');
Route::post('/register', 'AuthController@register')->name('register');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/search-everything', 'HomeController@searchEverything')->name('search-everything');
Route::get('/categories', 'HomeController@categories')->name('categories');
Route::get('/all-books', 'HomeController@allBooks')->name('all-books');

//cms
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware', 'prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin');

    //books
    Route::group(['prefix' => 'books'], function(){
        Route::get('/list', 'BookController@listBook')->name('books.list');
        Route::post('/add', 'BookController@addBook')->name('books.add');
    });

    //book categories
    Route::group(['prefix' => 'book-categories'], function(){
        Route::get('/list', 'BookController@listBookCategory')->name('book-categories.list');
        Route::post('/add', 'BookController@addBookCategory')->name('book-categories.add');
    });

    //loan atau peminjaman
    Route::group(['prefix' => 'loans'], function(){
        Route::get('/list', 'LoanController@listLoan')->name('loans.list');
        Route::post('/add', 'LoanController@addLoan')->name('loans.add');
    });

    Route::group(['prefix' => 'users'], function(){
        Route::get('/list', 'MemberController@listMember')->name('users.list');
    });
});
