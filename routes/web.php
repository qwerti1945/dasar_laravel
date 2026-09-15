<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name("student-list");
Route::get('/about', [StudentController::class, 'about'])->name("student-about");
Route::get('/create', [StudentController::class, 'create'])->name("student-create");
Route::post('/create', [StudentController::class, 'store'])->name("student-store");


