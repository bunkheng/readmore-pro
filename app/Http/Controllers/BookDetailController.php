<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookDetailController extends Controller
{
    public function show ($id) {
        $data = Book::find($id);
        return view('layouts.book-dt')->with('book', $data);
    }
}
