<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\People;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthC extends Controller
{
    // ===== Form Login =====
    public function showLoginForm()
    {
        return view('auth.login'); // login untuk semua role
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();
            $user->last_login_at = now();
            $user->save();
            // Redirect sesuai role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            if ($user->role === 'agent') {
                return redirect()->route('agent.dashboard');
            }

            if ($user->role === 'jemaah') {
                return redirect()->route('jemaah.dashboard');
            }

            Auth::logout();
            return redirect()->route('landingpage')
                ->with('error', 'Role tidak dikenali');
        }

        return back()->withInput()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }



    // ===== Logout =====
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();         // hapus semua session
        $request->session()->regenerateToken();    // proteksi CSRF
        return redirect()->route('login');
    }

    // ===== Form Register Jemaah =====
    public function showRegisterForm()
    {
        return view('auth.register'); // register khusus jemaah
    }

    // ===== Proses Register Jemaah =====
    public function registerJemaah(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // 1. Buat People record terlebih dahulu
        $people = People::create([
            'fullname' => $request->name,
        ]);

        // 2. Buat user dengan relasi polymorphic ke People (bukan Jemaah)
        // Catatan: Jemaah akan dibuat nanti ketika user memilih paket
        $user = User::create([
            'username' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_active' => true,
            'userable_id' => $people->id,
            'userable_type' => 'App\Models\People',
        ]);

        // 3. Tambahkan role 'Jemaah' ke user (many-to-many)
        $jemaahRole = Role::where('name', 'jemaah')->first();
        if ($jemaahRole) {
            $user->roles()->attach($jemaahRole->id);
        }

        // Redirect ke halaman login
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
