<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

Route::get('/', [HotelController::class, 'index']);

Route::resource('hotels', HotelController::class);
Route::resource('rooms', RoomController::class);
Route::resource('bookings', BookingController::class);

Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
