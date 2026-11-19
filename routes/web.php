<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return view('hello', ['title' => 'Hello World!']);
});

Route::get('/events', [EventController::class, 'index']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::get('/locations', [LocationController::class, 'index']);

Route::get('/location/{id}', [LocationController::class, 'show']);

Route::get('/user/{id}', [UserController::class, 'show']);
