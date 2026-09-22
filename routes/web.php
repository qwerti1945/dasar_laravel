<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name("student-list");
Route::get('/about', [StudentController::class, 'about'])->name("student-about");
Route::get('/create', [StudentController::class, 'create'])->name("student-create");
Route::post('/create', [StudentController::class, 'store'])->name("student-store");
Route::get('/show/{id}', [StudentController::class, 'show'])->name("student-show");
Route::get('/edit/{student}', [StudentController::class, 'edit'])->name("student-edit");
Route::put('/edit/{student}', [StudentController::class, 'update'])->name("student-update");
Route::delete('/destroy/{student}', [StudentController::class, 'destroy'])->name("student-destroy");



