<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;

class loanController extends Controller{
    
    public function listLoan(){
        $loans = Loan::all();
        return view('admin.loan.list')->with('loans', $loans);
    }

    public function addLoan(Request $request){
        $start_date = date('Y-m-d');
        $limit_date = date('Y-m-d', strtotime("+7 days"));
        $end_date = '2016-01-01';
        $fine = (float) $request->input('fine');

        if($fine <= 0){
            $fine = 0;
        }
        
        $loan = Loan::create([
            'book_id' => $request->input('book_id'),
            'user_id' => $request->input('user_id'),
            'fine' => $fine,
            'start_at' => $start_date,
            'end_at' => $end_date,
            'limit_at' => $limit_date
        ]);

        return redirect()->route('loans.list');
    }

    public function editLoan(Request $request){
        $start_date = date('Y-m-d');
        $limit_date = strtotime("+7 day", $start_date);
        $end_date = '0000-00-00';
        

        $loan = Loan::create([
            'book_id' => $request->input('book_id'),
            'user_id' => $request->input('user_id'),
            'fine' => $request->input('fine'),
            'start_at' => $start_date,
            'end_at' => $end_date,
            'limit_at' => $limit_date
        ]);

        return redirect()->route('loans.list');
    }


}