<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function view()
    {
        return view('login.view');
    }

    public function login()
    {

        $user = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if(auth()->attempt($user))
        {
            session()->regenerate();
            return redirect('/')->with('success','You log in successfully');
        }

        return back()->withInput()->withErrors(['email'=> 'Provided credential not matched']);

        // throw ValidationException::withMessages(['email'=> 'Provided credential not matched']);

    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success','Successfully Log out');
    }
}
