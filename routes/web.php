<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthConntroller;

Route::get('/register', [CustomAuthConntroller::class, "coustomregister"]
);
Route::get('/login',[CustomAuthConntroller::class,'coustomlogin']);
Route::post('/register-user',[CustomAuthConntroller::class,'registeruser'])->name('register-user');