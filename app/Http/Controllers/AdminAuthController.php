<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login'); // Pastikan file ini ada di resources/views/auth/
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard'); // Redirect ke dashboard admin
        }

        return back()->withErrors(['login' => 'Nama atau password salah.'])->withInput();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/')->with('success', 'Anda telah logout.');
    }
}
