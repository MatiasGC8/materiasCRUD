<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
/*
 * Route::get('/', function () {
    return view('welcome');});
*/
Route::get('/', [MaterialController::class, 'index']);
Route::resource('materials', MaterialController::class);

