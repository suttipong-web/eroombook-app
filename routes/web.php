<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;
// Route Home Page
Route::get('/', function () {
    return view('welcome');
});

//Route  ระบบจัดการห้อง
Route::prefix('/room')->group(
    function () {
        Route::get('/', [RoomsController::class, 'index']);
        Route::post('/store', [RoomsController::class, 'store'])->name('store');
        Route::get('/fetchall', [RoomsController::class, 'fetchAll'])->name('fetchAll');
        Route::delete('/delete', [RoomsController::class, 'delete'])->name('delete');
        Route::get('/edit', [RoomsController::class, 'edit'])->name('edit');
        Route::post('/update', [RoomsController::class, 'update'])->name('update');
    }
);

// Route  ระบบจองห้อง.
Route::prefix('/booking')->group(
    function () {
        Route::get('/', [BookingController::class, 'index']);
        Route::get('/filter', [BookingController::class, 'filter'])->name('filter');
        Route::post('/search', [BookingController::class, 'search'])->name('search');
        Route::post('/insertBooking', [BookingController::class, 'insertBooking'])->name('insertBooking');
    }
);



//Route  ระบบ Signin  With  Cmu OAuth

//Route Payment 

//Route page api scinet TV 

//Rount Admin Manage Booking 