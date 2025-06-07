<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/dashboard', function () {
    return view('user.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

// home routes 

Route::get('/mac', [HomeController::class, 'mac']);
Route::get('/ipad', [HomeController::class, 'ipad']);
Route::get('/watch', [HomeController::class, 'watch']);
Route::get('/airpods', [HomeController::class, 'airpods']);
Route::get('/cart/{id}', [HomeController::class, 'cart'])->middleware(['auth', 'verified']);
Route::get('/mycart', [HomeController::class, 'mycart'])->middleware(['auth', 'verified']);


// admin routes
route::get('admin/dashboard',[Admincontroller::class,'index'])->middleware(['auth','admin']);
Route::get('admin/create/mac',[Admincontroller::class,'createMac'])->middleware(['auth','admin']);
Route::post('admin/store',[Admincontroller::class,'store'])->middleware(['auth','admin']);