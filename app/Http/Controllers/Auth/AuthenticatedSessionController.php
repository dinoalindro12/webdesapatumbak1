<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login', [
            'redirect' => request()->redirect // Tambahkan parameter redirect
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();

        // Redirect ke URL yang diminta sebelumnya atau default berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->intended(route('dashboard.index'));
        } else {
            // Untuk user guest, redirect ke halaman surat-menyurat
            return redirect()->intended(route('layanan.surat-menyurat'));
        }
    }

    // ConfirmablePasswordController.php
    protected function redirectBasedOnRole($user): RedirectResponse
    {
        return redirect()->intended(
            $user->role === 'admin' ? route('dashboard.index') : route('layanan.surat-menyurat')
        );
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
