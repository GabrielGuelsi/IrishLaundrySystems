<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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

        $validEmail    = (string) config('app.admin_email');
        $validPassword = (string) config('app.admin_password');

        if (
            $validEmail !== '' && $validPassword !== '' &&
            hash_equals(strtolower($validEmail), strtolower($request->email)) &&
            $this->passwordMatches($request->password, $validPassword)
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

    /**
     * ADMIN_PASSWORD should hold a bcrypt/argon hash (php artisan admin:hash-password).
     * A plain-text value is still accepted so an existing .env keeps working, but it is logged.
     */
    private function passwordMatches(string $given, string $stored): bool
    {
        if (Hash::isHashed($stored)) {
            return Hash::check($given, $stored);
        }

        Log::warning('ADMIN_PASSWORD is stored in plain text; replace it with a hash (php artisan admin:hash-password).');

        return hash_equals($stored, $given);
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['admin_logged_in', 'admin_email']);
        $request->session()->regenerate();

        return redirect()->route('admin.login');
    }
}
