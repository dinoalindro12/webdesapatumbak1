<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        // Redirect berdasarkan role user
        return $this->redirectBasedOnRole($request->user());
    }

    /**
     * Determine the redirect path based on user's role.
     */
    protected function redirectBasedOnRole($user): RedirectResponse
    {
        if ($user->role === 'admin') {
            return redirect()->intended(route('admin.dashboard', absolute: false));
            
        }

        // Untuk admin atau role lain
        return redirect()->to('/'); // atau route('welcome') jika ada named route
    }
}