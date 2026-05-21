<?php
use App\Http\Controllers\BuahController;
use Illuminate\Support\Facades\Route;

Route::get('/buah', [BuahController::class,
'index'])->name('buah.index');
Route::get('/buah/create', [BuahController::class,'create'])->name('buah.create');
Route::post('/buah', [BuahController::class,'store'])->name('buah.store');