<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\SignUp;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/login',Login::class)->name('login');
    Route::get('/register',SignUp::class)->name('register');
});

Route::middleware('auth')->group(function (){
    Route::get('/', function () {
        return view('pages.home');
    })->name('home');
});
