<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/student', [StudentController::class, 'student'])->name('student');
Route::get('/teacher', [TeacherController::class, 'teacher'])->name('teacher');
Route::get('/customer', [CustomerController::class, 'customer'])->name('customer');
