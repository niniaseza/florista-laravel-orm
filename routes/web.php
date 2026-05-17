<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;

Route::get('/', [FlowerController::class, 'index']);
Route::resource('flowers', FlowerController::class);