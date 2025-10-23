<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect()->route('login');
});

    Route::controller(PageController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login', 'handleLogin')->name('login.handle');
    Route::get('/dashboard', 'showDashboard')->name('dashboard');
    Route::get('/pengelolaan', 'showPengelolaan')->name('pengelolaan');
    Route::get('/profile', 'showProfile')->name('profile');
    Route::post('/logout', 'handleLogout')->name('logout');
});
