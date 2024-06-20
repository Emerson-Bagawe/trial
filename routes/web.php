<?php

use App\Http\Controllers\personController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',[personController::class,'index']);