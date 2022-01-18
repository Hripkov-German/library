<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/add_book', function () {
    return view('add_book');
});

Route::get('/add_author', function () {
    return view('add_author');
});


Route::get('/books', [BookController::class, 'show']);
Route::get('/authors', [AuthorController::class, 'show']);

