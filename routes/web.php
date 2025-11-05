<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// HAPUS MIDDLEWARE DULU UNTUK TESTING
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', [
        'total_orders' => 3,
        'delivered_orders' => 0,
        'total_amount' => 481.34,
        'pending_orders' => 3,
        'revenue' => 37802,
        'order_value' => 28305
    ]);
});