<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('panel')->group(function () {
    Route::get('/admin/login', [AuthController::class, "formAdmin"])
        ->middleware('guest:partner,admin')
        ->name('login.admin');

    Route::post('/admin/login', [AuthController::class, "loginAdmin"])
        ->middleware('guest:partner,admin');

    Route::get('/login', [AuthController::class, "formPartner"])
        ->middleware('guest:partner,admin')
        ->name('login');

    Route::post('/login', [AuthController::class, "loginPartner"])
        ->middleware('guest:partner,admin');

    Route::get('/logout', [AuthController::class, "logout"])
        ->middleware('auth:partner,admin')
        ->name('logout');

    Route::get('/', function () {
        return view('admin.dashboard');
    })->middleware('auth:partner,admin');

    Route::resource('partner', PartnerController::class)->middleware('auth:admin');
    Route::resource('category', CategoryController::class)->middleware('auth:admin');
    Route::resource('service', ServiceController::class)->middleware('auth:partner');
});
