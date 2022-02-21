<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrerController extends Controller
{
    public function create(){
        return view('app');
    }

    public function store(){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:5',
            'email' => 'required|email|maz:255',
            'password' => 'required|max:30|min:6',
        ]);

        User::created($attributes);
        return redirect('/');
    }
}
