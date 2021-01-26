<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            "username" => "required",
            "password" => "required"
        ]);
        $username = $request->username;
        $password = $request->password;
        if (Auth::attempt(['name' => $username, 'password' => $password])) {
            return view('login-success', ['user'=>Auth::user()]);
        } else {
            return redirect()->route('login');
        }
    }   

    public function logout() {
        Auth::logout();
        return redirect()->route('login'); 
    }
}
