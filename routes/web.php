<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('user', UserController::class);

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/form-element', function () {
    return view('form-element');
});

Route::get('/table-example', function () {
    return view('table-example');
});

Route::get('/login', function () {
    return view('login');
});
