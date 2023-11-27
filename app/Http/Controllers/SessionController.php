<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store() {
        $attributes = request()->validate([
            'username'=> 'required',
            'password' => 'required'
        ]);

        if (auth()-> attempt($attributes)) {
            session()->regenerate();
            return redirect('main/posts')->with('success',  'Login Successfully');
        }

        return back()->withErrors(['username' => 'invalid credentials provided']);
    }

    public function destroy() {
        auth()->logout();

        return redirect('/login');
    }

    public function create() {
        return view('admin.login');
    }
}
