<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //* Tampilkan tampilan register
    public function index(){
        return view('auth.register');
    }

    
    public function register(Request $request){
        //* validasi request yang dikirimkan
        $result = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        //* Hash password yang dikirimkan
        $result['password'] = bcrypt($result['password']);

        //* Tambahkan ke database via UserModel
        User::create($result);

        //*Redirect ke login
        return redirect('/login');
    }
}
