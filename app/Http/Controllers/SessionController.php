<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        $valid = request()->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (! Auth::attempt($valid)) {
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ])->onlyInput('username');
        }

        request()->session()->regenerate();

        return redirect('/clubs');
    }

    public function destroy() {
        Auth::logout();

        request()->session()->invalidate();

        return redirect('/login');
    }
}
