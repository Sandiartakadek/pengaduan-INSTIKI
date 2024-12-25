<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    function tampilLogin() {
        return view('auth.login');
    }

    function submitLogin(Request $request) {
        $data = $request->only('username', 'password');

        if (Auth::attemp($data)) {
            $request->session()->regenerate();
            return redirect()->route('welcome');
        } else {
            return redirect()->back()->with('Error', 'Username or Password Wrong');
        }
    }
}

?>