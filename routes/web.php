<?php
use App\Http\Controllers\BuahController;
use Illuminate\Support\Facades\Route;

Route::get('/buah', [BuahController::class,
'index'])->name('buah.index');
