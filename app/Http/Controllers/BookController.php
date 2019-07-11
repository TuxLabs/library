<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\BookCategory;

class BookController extends Controller{
    
    public function listBook(){
        $books = Book::all();
        return view('admin.book.list')->with('books', $books);
    }

    public function addBook(Request $request){
        $book = Book::create([
            'title' => $request->input('title'),
            'code' => $request->input('code'),
            'stock' => $request->input('stock'),
            'category_id' => $request->input('category_id'),
            'author' => $request->input('author'),
            'published_by' => $request->input('published_by')
        ]);

        return redirect()->route('books.list');
    }

    public function listBookCategory(){
        $categories = BookCategory::all();

        return view('admin.book-category.list')->with('categories', $categories);
    }

    public function addBookCategory(Request $request){
        $category = BookCategory::create([
            'name' => $request->input('name')
        ]);

        return redirect()->route('book-categories.list');
    }
}