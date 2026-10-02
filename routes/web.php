<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor-banjir', [LaporBanjirController::class, 'index']);


Route::post('/lapor-banjir', [LaporBanjirController::class, 'store']);
