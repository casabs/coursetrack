<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API CRUD Routes for Students
Route::get('/students', [StudentController::class, 'directory']); // List all students
Route::get('/students/{id}', [StudentController::class, 'show']); // Get a single student by id
Route::post('/students', [StudentController::class, 'store']); // Create a new student
Route::put('/students/{student}', [StudentController::class, 'update']); // Update an existing student
Route::delete('/students/{student}', [StudentController::class, 'destroy']); // Delete a student
Route::patch('/students/{student}', [StudentController::class, 'update']);
