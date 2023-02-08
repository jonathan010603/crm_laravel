<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class Logincontroller
{
    public function index()
    {
        return view('pages.login.index');
    }

    public function attempt(Request $request)
    {
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect('/');
            } else {
                return redirect()->back()->withErrors(['Invalid username or password']);
            }
        } catch (QueryException $error) {
            return redirect()->back()->withErrors(['Internal server error']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}