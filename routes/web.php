<?php

use Illuminate\Support\Facades\Route;

Route::get('/tentang', function () {
    return '<h1>Halaman Tentang Aplikasi Event Hub</h1>';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/events', function () {
    return view('events');
});
