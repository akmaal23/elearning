<?php

use App\Http\Controllers\DashboradControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});





//tambahkan routing baru
Route::get('/salam/{nama}', function ($nama){
    return "Assalamualaikum...$nama";
});

// routing profil

Route::get('admin/dashboard', [DashboradControler::class, 'index']);

