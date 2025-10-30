<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function() {
    return view('about');
})->name('about');

// EMPLOYEE ROUTES
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index'); // lijst tonen
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create'); // formulier maken
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store'); // opslaan
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit'); // bewerken
Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');

