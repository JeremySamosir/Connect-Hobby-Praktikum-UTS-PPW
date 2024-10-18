<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function musik()
    {
        return view('login');

    }

    function lukis()
    {
        return view('login');

    }

    function tari()
    {
        return view('login');

    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Please fill put this field.',
            'password.required' => 'Please fill put this field.',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($infologin)){
            $user = Auth::user();
            // dd(Auth::user()->role);
            // Redirect based on user role
            if ($user->hobby == 'musik') {
                return redirect()->route('musik');
            } elseif ($user->hobby == 'tari') {
                return redirect()->route('tari');
            } elseif ($user->hobby == 'lukis') {
                return redirect()->route('lukis');
            }
        } else {
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
        
}
