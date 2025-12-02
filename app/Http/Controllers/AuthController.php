<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView($role)
    {
        return view('auth.login', compact('role'));
    }

    public function registerView($role)
    {
        return view('auth.register', compact('role'));
    }

    public function roleView()
    {
        return view('auth.role');
    }

    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required|in:user,owner',
        ]);

        User::create([
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'role' => $req->role,
        ]);

        return redirect()->route('login', ['role' => $req->role])
            ->with('success', 'Akun berhasil dibuat, silakan login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {

            if (Auth::user()->role !== $request->role) {
                Auth::logout();

                return back()->with('error', 'Anda tidak memiliki akses sebagai '.$request->role);
            }

            return redirect('/dashboard-'.$request->role);
        }

        return back()->with('error', 'Email atau password salah.');
    }
}
