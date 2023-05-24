<?php

namespace App\Http\Controllers;
use Illuminate\Http\Model\login;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

        /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        //* Validasi request yang dikirimkan
        $login = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //* Cek Bisa login atau enggak via namespace Auth
 
        if (Auth::attempt($login)) {

            //* Kalau berhasil regenerate session biar aman dari serangan
            $request->session()->regenerate();
            //* Redirect ke '/'
            return redirect()->intended('/');
        }
 
        //* Jika gagal, kembalikan lagi dengan pesan error dibawah.
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    //* Tampilkan form login
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }
 
/**
 * Log the user out of the application.
 */
public function logout(Request $request)
{
    //* Logout user via auth namespace
    Auth::logout();
    //* Hilangkan session
    $request->session()->invalidate();
    //* Regenerate CSRF
    $request->session()->regenerateToken();
    //* Lempar ke login
    return redirect('/login');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
