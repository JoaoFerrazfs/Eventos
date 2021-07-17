<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', [EventController::class,'index']);

Route::get('/events/create',[EventController::class,'create']);

Route::get('/contact',[ContactController::class,'index']);

Route::post('/events',[EventController::class, 'store']);


