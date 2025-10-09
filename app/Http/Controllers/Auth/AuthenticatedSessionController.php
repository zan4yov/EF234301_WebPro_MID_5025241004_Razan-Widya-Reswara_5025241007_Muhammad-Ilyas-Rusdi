<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller {
    public function create(): Response {
        return Inertia::render('Login');
    }

    public function store(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'dosen') {
                return redirect()->intended('/dosen/dashboard');
            }
            return redirect()->intended('/mahasiswa/dashboard');
        }

        return back()->withErrors([
            'email' => 'Credentials do not match',
        ])->onlyInput('email');
    }

    public function destroy(Request $request): RedirectResponse {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}