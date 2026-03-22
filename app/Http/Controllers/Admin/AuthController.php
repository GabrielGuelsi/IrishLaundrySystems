<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.equipment.index');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $validEmail    = config('app.admin_email');
        $validPassword = config('app.admin_password');

        if (
            $request->email === $validEmail &&
            $request->password === $validPassword
        ) {
            $request->session()->put('admin_logged_in', true);
            $request->session()->put('admin_email', $request->email);
            $request->session()->regenerate();

            return redirect()->route('admin.equipment.index');
        }

        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['admin_logged_in', 'admin_email']);
        $request->session()->regenerate();

        return redirect()->route('admin.login');
    }
}
