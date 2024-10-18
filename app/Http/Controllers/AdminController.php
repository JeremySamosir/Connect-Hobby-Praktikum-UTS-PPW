<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    // membuat function untuk menampilkan halaman beranda
    function musik(){
    
        return view('beranda');
    
    }

    function lukis(){
    return view('beranda');

    }

    function tari(){
   

    }


}
