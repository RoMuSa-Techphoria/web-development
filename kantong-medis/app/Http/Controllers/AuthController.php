<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formAdmin()
    {
        return view('admin.auth.login_admin');
    }

    public function formPartner()
    {
        return view('admin.auth.login_partner');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('panel');
        }

        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ]);
    }

    public function loginPartner(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('partner')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('panel');
        }

        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('partner')->logout();
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/panel');
    }
}
