<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Selamat Datang";
});

Route::get('/pendikom', function () {
    return "Selamat Datang mahasiswa pendikom";
});
