<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guests/checkin', function () {
    return view('guest/checkin');
});

Route::group(['prefix' => '/guests'], function () {
    Route::post('/', [GuestController::class , 'create']);
});
