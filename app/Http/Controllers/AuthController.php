<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \App\User;


class AuthController extends Controller{
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $email = $request->input('email');
            $password = $request->input('password');

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect('/');
            }else{
                return redirect('/login');
            }
        }else{
            return view('auth.signin');
        }
        
    }

    public function register(Request $request){
        $status = (int) $request->input('status');
        $member_id = User::generateMemberId($status);

        $user = User::create([
            'status' => $status,
            'member_id' => $member_id,
            'personal_id' => $request->input('personal_id'),
            'password' => Hash::make($request->input('password')),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => '-',
        ]);
        
        return redirect()->route('login');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}