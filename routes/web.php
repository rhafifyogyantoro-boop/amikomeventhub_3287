<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\TicketController;



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/events', function () {
    return view('events');
});
// User Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Admin Area
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/profil', function () {
    return view('profil');
});

