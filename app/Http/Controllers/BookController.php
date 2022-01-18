<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookAuthor;

class BookController extends Controller
{
    // показ
    function show()
    {
        $book_data = Book::all();
        return view('books', [
            'books'=>$book_data,
            ]);
    }
}
