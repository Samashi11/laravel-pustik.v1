<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        $count = Book::count();
        $books = Book::first();
        return view('index', [
            'books' => $books,
            'count' => $count
        ]);
    }
}
