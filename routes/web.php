<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::middleware('guest')->group(function () {
    Route::get('/login',Login::class)->name('login');
});
