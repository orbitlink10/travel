<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('home');
Route::view('/register', 'register')->name('register');
Route::view('/dashboard', 'dashboard')->name('dashboard');
