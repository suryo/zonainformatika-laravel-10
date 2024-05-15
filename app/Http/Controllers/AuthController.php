<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role; // Import model Role

use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

public function register(Request $request)
{
    // Validasi input pengguna
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'tempat_lahir' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
    ]);

    // Membuat pengguna baru
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role_id' => $request->role,
        'phone' => $request->phone,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'nim' => $request->nim,
        'kampus' => $request->kampus,
    ]);

    return redirect()->route('landing')->with('success', 'User registered successfully.');
}

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input pengguna
        $credentials = $request->only('email', 'password');

        // Authentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika berhasil, redirect ke halaman yang diinginkan
            return redirect()->route('landing');
        } else {
            // Jika gagal, redirect kembali dengan pesan error
        }
    }

    public function logout()
    {
        Auth::logout();
        // Redirect ke halaman login atau halaman lainnya
        return redirect()->route('login');
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function forgotPassword(Request $request)
    {
        // Validasi input pengguna
        $this->validate($request, ['email' => 'required|email']);

        // Kirim email reset password
        $status = Password::sendResetLink($request->only('email'));

        // Redireksi atau respons sesuai kebutuhan Anda
    }
}
