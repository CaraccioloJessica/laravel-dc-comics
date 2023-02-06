<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// index
Route::get('/', [MainController::class, 'home'])->name('home');

// delete
Route::get('/person/delete/{person}', [MainController::class, 'personDelete'])
  ->name('person.delete');