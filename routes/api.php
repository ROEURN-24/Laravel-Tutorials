<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students/student', [StudentController::class, 'student'])->name('students.student');
Route::post('/students/create', [StudentController::class, 'store'])->name('students.create');

Route::get('/teachers/student', [TeacherController::class, 'teacher'])->name('teachers.teacher');
Route::post('/teachers/create', [TeacherController::class, 'store'])->name('teachers.create');

Route::get('/customers/student', [CustomerController::class, 'customer'])->name('customers.student');
Route::post('/customers/create', [CustomerController::class, 'store'])->name('customers.create');
