<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/starter', [App\Http\Controllers\HomeController::class, 'starter_page'])->name('starter');

Route::get('/services', [App\Http\Controllers\HomeController::class, 'services_page'])->name('services');

Route::get('/calendar', [App\Http\Controllers\HomeController::class, 'calendar_page'])->name('calendar');