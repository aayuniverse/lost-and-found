<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    
public function register(Request $request)
{
    $validated = $request->validate([
        'nim_nip' => ['required', 'string', 'max:50', 'unique:users,nim_nip'],
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'confirmed', Password::min(8)],
    ]);

    User::create([
        'nim_nip' => $validated['nim_nip'],
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => $validated['password'],
        'role' => 'mahasiswa',
    ]);

    return redirect()->route('login')
        ->with('success', 'Registrasi berhasil! Silakan login terlebih dahulu.');
}

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nim_nip' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'))
                ->with('success', 'Berhasil masuk ke TemuBarang.');
        }

        return back()
            ->withErrors([
                'nim_nip' => 'NIM/NIP atau kata sandi tidak sesuai.',
            ])
            ->onlyInput('nim_nip');
    }

    
public function showForgotPassword()
{
    return view('auth.forgot-password');
}

public function sendResetLink(Request $request)
{
    $request->validate([
        'email' => ['required', 'email'],
    ]);

    
$status = \Illuminate\Support\Facades\Password::sendResetLink(
    $request->only('email')
);

     return $status === \Illuminate\Support\Facades\Password::RESET_LINK_SENT
        ? back()->with('success', 'Tautan reset password berhasil dikirim ke email.')
        : back()->withErrors(['email' => __($status)]);
}

public function showResetPassword(Request $request, string $token)
{
    return view('auth.reset-password', [
        'token' => $token,
        'email' => $request->email,
    ]);
}

public function resetPassword(Request $request)
{
    $request->validate([
        'token' => ['required'],
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed', 'min:8'],
    ]);

    $status = \Illuminate\Support\Facades\Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password),
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

   
    return $status === \Illuminate\Support\Facades\Password::PASSWORD_RESET
        ? redirect()->route('login')->with('success', 'Password berhasil diubah. Silakan login.')
        : back()->withErrors(['email' => __($status)]);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'Kamu berhasil keluar.');
    }
}
