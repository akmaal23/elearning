<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});






//tambahkan routing baru
Route::get('/salam/{nama}', function ($nama){
    return "Assalamualaikum...$nama";
});

// routing profil

Route::get('admin/Dashboard', [DashboardController::class, 'index']);

Route::get('admin/student', [StudentController::class,'index']);

Route::get('admin/course', [CourseController::class,'index']);

Route::get('admin/student/create', [StudentController::class, 'create']);
Route::post('admin/student/store', [StudentController::class, 'store']);
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);