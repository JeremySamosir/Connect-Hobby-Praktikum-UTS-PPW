<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function musik(){
        
        return view('beranda');
    
    }

    function lukis(){
        // echo "Mahasiswa Page";
        // echo "<h1>". Auth::user()->name ."</h1>";
        // echo "<a href='/logout'>Logout</a>";
    return view('beranda');

    }

    function tari(){
        // echo "Mahasiswa Page";
        // echo "<h1>". Auth::user()->name ."</h1>";
        // echo "<a href='/logout'>Logout</a>";
    return view('beranda');

    }


}
