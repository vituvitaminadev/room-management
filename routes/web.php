<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/events'], function () {
    Route::get('/register', function () {
        return view('event/register');
    });

    ROute::post('/', [EventController::class, 'create']);
});

Route::group(['prefix' => '/guests'], function () {
    Route::get('/checkin', function () {
        return view('guest/checkin');
    });

    Route::post('/', [GuestController::class , 'create']);
});
