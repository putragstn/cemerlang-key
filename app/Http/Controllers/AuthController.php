<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required']
        ]);


        // Jika Autentikasi berhasil alihkan ke halaman dahsboard
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Jika Autentikasi gagal biarkan stay di halaman login
        return back()->with('loginError', 'Wrong Email or Password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }


    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    function storeRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:5|max:255',
            'email'     => 'required|unique:users|email',
            'password'  => 'required|min:6|max:255'
        ]);

        // #2 Cara dari Laravel
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Simpan data yang berhasil lolos validasi
        User::create($validatedData);

        /** 
         *  jika data lolos validasi dan berhasil disimpan, maka tampilkan pesan
         *  setelah itu alihkan ke halaman login
         */
        return redirect('/login')->with('success', 'Registration Succesfull, Please login');
    }
}
