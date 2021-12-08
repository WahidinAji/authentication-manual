<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //untuk ngarahin ke halaman login
    public function login()
    {
        return view('auth.login');
    }
    //untuk ngarahin ke halaman register
    public function register()
    {
        return view('auth.register');
    }

    //form login user
    public function formLogin(Request $req)
    {
        $credentials = $req->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->intended('/')->with('msg', 'Login berhasil');
        }
        return back()->withErrors([
            'email' => 'nama tidak boleh kosong',
            'password' => 'password salah!!',
        ]);
    }
    //form login register
    public function formRegister(Request $req)
    {
        $req->validate(
            [
                'name' => 'required|string',
                'email' => 'required|string|unique:users,email',
                'password' => 'required|string|min:8',
                'roles' => ['required', Rule::in(['admin', 'user'])]
            ],
            [
                'name.required' => 'nama tidak boleh kosong',
                'email.required' => 'email tidak boleh kosong',
                'password.required' => 'password tidak boleh kosong',
                'roles.required' => 'role tidak cocok',
            ],
        );
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->email_verified_at = now();
        $user->password = Hash::make($req->password);
        // $user->roles = $req->roles;
        $user->save();
        return redirect('/');
        // if (auth()->attempt(['email' => $user->email, 'password' => $user->password])) {
        //     return redirect()->route('dashboard')->with('msg', 'Register berhasil');
        // }
    }
    public function logout()
    {
        \session()->flush();
        \cache()->flush();
        \auth()->logout();
        return redirect()->route('login')->with('msg', 'Berhasil logout');
    }
}
