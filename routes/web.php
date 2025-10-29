<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/index', function () {
//     return view('employee.index');
// })->name('employee');

Route::get('/index', [EmployeeController::class, 'index'])->name('employee');

Route::get('/about', function() {
    return view('about');
})->name('about');

