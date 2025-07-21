<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function User(): HasMany
    {
        return $this->hasMany(Berita::class, 'author_id');
    }

    public function findForPassport($username)
    {
        return $this->where('username', $username)->orWhere('email', $username)->first();
    }
    
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
    $user = $request->user();
    if ($user->role === 'admin') {
        return redirect()->intended(route('dashboard', absolute: false));
    }
    
    return redirect()->intended(route('surat-menyurat.index', absolute: false));
}
}
