<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Book;
use \App\User;

class Loan extends Model
{
    protected $table = 'loans';

    protected $guarded = [];

    public function getBook(){
        $book = Book::find($this->book_id);
        return $book;
    }

    public function getUser(){
        $user = User::find($this->user_id);
        return $user;
    }
}
