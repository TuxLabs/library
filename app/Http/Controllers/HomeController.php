<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test(){
        return view('auth.signin');
    }

    public function search(){
        $books = \App\Book::all();
        return view('search-result')->with('books', $books);
    }

    public function searchEverything(){
        if(isset($_GET['q'])){
            $q = "%".$_GET['q']."%";
            $books = Book::where(function ($query) use ($q) {
                $query->where('title', 'like', $q)
                      ->orWhere('author', 'like', $q);
            })->get();
        }else{
            $books = \App\Book::all();
        }
       

        

        // dd($books);

        return view('search-result')->with('books', $books);
    }
}
