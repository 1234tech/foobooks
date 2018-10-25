<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BookController extends Controller
{
    public function index()
    {
        //       return App::environment();
        //return 'Here are all the books...';
        return view('books.index');
    }

    public function show($title)
    {
        //return 'Here is the book: $title
        return view('books.show')->with(['title' => $title]);
    }
}
