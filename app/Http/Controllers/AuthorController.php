<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    function show()
    {
        $author_data = Author::all();
        return view('authors', [
            'authors'=>$author_data,
        ]);
    }
}
