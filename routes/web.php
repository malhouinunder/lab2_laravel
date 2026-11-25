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

Route::get('/event/create', [EventController::class, 'create']);

Route::get('/event/edit/{id}', [EventController::class, 'edit']);

Route::post('/event/update/{id}', [EventController::class, 'update']);

Route::get('/event/destroy/{id}', [EventController::class, 'destroy']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::post('/event', [EventController::class, 'store']);

Route::get('/locations', [LocationController::class, 'index']);

Route::get('/location/{id}', [LocationController::class, 'show']);

Route::get('/user/{id}', [UserController::class, 'show']);
