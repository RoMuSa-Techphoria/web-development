<?php

use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::resource('partner', PartnerController::class);
Route::resource('category', CategoryController::class);

