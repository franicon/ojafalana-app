<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller {
    public function create() {
        return view('admin.register');
    }

    public function store() {
      $attribute =  request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required'
        ]);

//      $attribute['password'] = bcrypt($attribute['password']);

      $user = User::create($attribute);
      auth()->login($user);
      session()->flash('success', 'Account Created successfully.');

      return redirect('/');
    }
}
