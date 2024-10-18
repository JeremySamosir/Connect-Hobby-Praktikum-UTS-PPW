<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});


Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/profile', function () {
    return view('profile');
});


use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'musik', 'tari', 'lukis'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});
Route::get('/home', function () {
    $user = Auth::user();
    if($user->role == 'musik') return redirect('/musik');
    elseif($user->role == 'tari') return redirect('/tari');
    else return redirect('/lukis');
});

Route::middleware(['auth'])->group(function(){
Route::get('/musik', [AdminController::class, 'musik']);
Route::get('/tari', [AdminController::class, 'tari']);
Route::get('/lukis', [AdminController::class, 'lukis']);
});

Route::get('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/lacak', [AdminController::class, 'lacak'])->name('lacak');;