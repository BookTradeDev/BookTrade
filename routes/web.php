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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/booksfortrade', 'BooksForTradeController@index');
Route::post("store", 'BooksForTradeController@store');

//Route::get('/booksfortrade', function (){
//    return view('booksfortrade');
//});

Route::get('/selectbook', 'SelectBookController@index');
Route::get('selectbook-ajax', 'SelectBookController@dataAjax');



