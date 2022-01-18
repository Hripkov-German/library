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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/add_book', function () {
    return view('add_book');
});

Route::get('/authors', function () {
    return view('authors');
});

Route::get('/add_author', function () {
    return view('add_author');
});
