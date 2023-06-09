<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.index');
    }

    public function store()
    {
            $attributes = request()->validate([
                'name' => 'required| max:255',
                'username' => 'required|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' =>'required|min:3'
            ]);

            $user = User::create($attributes);

            auth()->login($user);

            return redirect('/')->with('success','User Registered Successfully');
    }
}
