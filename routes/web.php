<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', [EventController::class,'index']);

Route::get('/events/create',[EventController::class,'create'])->middleware('auth');

Route::get('/events/{id}',[EventController::class,'show']);

Route::get('/contact',[ContactController::class,'index']);

Route::post('/events',[EventController::class, 'store']);

Route::get('/dashboard',[EventController::class,'dashboard'])->middleware('auth');


