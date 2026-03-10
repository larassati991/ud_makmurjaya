<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // Find user by email
        $user = User::where('email', $credentials['email'])->first();

        // Check if user exists and password is correct
        if ($user && Hash::check($credentials['password'], $user->password)) {
            session(['admin_authenticated' => true, 'admin_user_id' => $user->id, 'admin_user_name' => $user->name]);
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah!'])->onlyInput('email');
    }

    public function logout()
    {
        session()->forget(['admin_authenticated', 'admin_user_id', 'admin_user_name']);
        return redirect('/')->with('success', 'Logout berhasil!');
    }
}
?>
