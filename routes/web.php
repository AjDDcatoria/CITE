<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\SignUp;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/login',Login::class)->name('login');
    Route::get('/register',SignUp::class)->name('register');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/', function() { return view('pages.home');})->name('home');

    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::get('/',function() {return view('pages.admin.dasboard');})->name('admin.dashboard');
        Route::get('/new-users',function() {return view('pages.admin.new-users');})->name('admin.new.users');
        Route::get('/mange-rooms',function() {return view('pages.admin.manage-rooms');})->name('admin.manage.rooms');
    });
});