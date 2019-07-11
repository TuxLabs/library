<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller{
    
    public function listBook(){
        $books = Book::all();
        return view('admin.book.list')->with('books', $books);
    }
}