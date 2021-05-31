<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get(' ', [ContactController::class, 'index']);
Route::get('contact', [ContactController::class, 'contact']);
Route::post('store', [contactController::class, 'store']);
Route::post('del/{id}', [contactController::class, 'del']);
Route::get('edit/{id}', [ContactController::class, 'Edit']);
Route::post('edit', [contactController::class, 'update']);
