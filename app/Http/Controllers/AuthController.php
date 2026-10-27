<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Redirect otomatis berdasarkan Role
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau password yang dimasukkan salah.',
        ])->onlyInput('email');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users,email'],
            'no_hp' => ['nullable', 'string', 'max:100'],
            'role' => ['required', 'in:user,konservator'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'username' => $validated['name'],
            'email' => $validated['email'],
            'no_telepon' => $validated['no_hp'] ?? null,
            'role' => $validated['role'],
            'password' => Hash::make($validated['password']),
            'created_at' => now(),
        ]);

        Auth::login($user);

        // Jika pendaftaran oleh admin, arahkan ke dashboard admin
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
