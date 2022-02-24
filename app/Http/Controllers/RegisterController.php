<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('app');
    }

    public function store(Request $request){
         $attributes = \request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:5',
            'email' => 'required|email|max:255',
            'password' => 'required|max:30|min:6',
            'password_second' => 'required|max:30|min:6'
        ]);
        dd('Deu');
//        User::created($attributes);
//        return redirect('/');
    }
}
