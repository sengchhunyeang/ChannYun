<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Register Page
Route::get('/register', function () {
    return view('partial.register');
})->name('register');

// Handle Student Registration
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Dashboard Routes
Route::prefix('dashboard')->group(function () {
    // Main Dashboard Page
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Show Form Data
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');

    // Show Student List
    Route::get('/students', [StudentController::class, 'index'])->name('dashboard.students');
});

// Handle Student Creation
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
// Delete Student Route
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');