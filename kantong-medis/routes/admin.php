<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/panel/admin/login', [AuthController::class, "formAdmin"]);
Route::get('/panel/login', [AuthController::class, "formPartner"]);
Route::resource('partner', PartnerController::class);
Route::resource('category', CategoryController::class);

