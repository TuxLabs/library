<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $table = 'book_categories';

    protected $guarded = [];

    public function getTotalStock(){
        $total_book = \App\Book::where('category_id', $this->id)->get();
        $total_stock = 0;
        
        foreach ($total_book as $i) {
           $total_stock += (int) $i->stock;
        }

        return $total_stock;
    }

    public function getBookByCategory(){
        $books = Book::where('category_id', $this->id);
        return $books;
    }
}
