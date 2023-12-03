<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidasiController extends Controller
{
    public function viewLogin()
    {
        return view('login.index');
    }

    public function viewRegister()
    {
        return view('login.regis');
    }

    public function validasiLogin(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('home');
        }
 
        return back()->with('fail','username or password is wrong');

    }

    public function validasiRegister(Request $request)
    {
        $confirmasiValidasi = $request->validate([
            'name' => 'required|min:4|max:100|unique:users',
            'email' => 'required',
            'password' => 'required|min:6|max:100'
        ]);

        if($request->password != $request->confirmPassword)
        {
            
            return back()->with('failed','password dan confirmasi tidak sinkron');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level
        ]);

        return redirect()->route('view.login')->with('success','anda telah membuat akun baru');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('home');
    }
}
