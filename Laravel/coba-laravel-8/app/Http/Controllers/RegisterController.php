<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register.index', [
      "title" => "Register",
      "active" => "register",
    ]);
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate(
      [
        'name' => 'required|max:255',
        'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:8|max:255',
      ],
      [
        'name.required' => 'Name field is required.',
        'username.required' => 'Username field is required.',
        'username.unique' => 'Username has already been taken.',
        'username.min' => 'Username must be at least 3 characters.',
        'email.required' => 'Email field is required.',
        'email.email' => 'Email field must be email address.',
        'email.unique' => 'Email has already been taken.',
        'password.required' => 'Password field is required.',
        'password.min' => 'Password must be at least 8 characters.',
      ]
    );

    // $validatedData['password'] = bcrypt($validatedData['password']);
    $validatedData['password'] = Hash::make($validatedData['password']);
    User::create($validatedData);
    // $request->session()->flash('success', 'Registration successfull!, please login.');
    return redirect('/login')->with('success', 'Registration successfull!, please login.');
  }
}
