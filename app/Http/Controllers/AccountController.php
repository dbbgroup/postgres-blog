<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
    }

    public function create(array $data)
    {
        return User::create([
            'login' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function signup(Request $request)
    {
        $request->validate([
            'login' => 'required|email|unique:accounts',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/");
    }
}
