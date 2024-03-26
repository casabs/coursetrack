<?php

use App\Http\Controllers\StudentController;
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

/*INDEX OK*/
Route::get('/', [StudentController::class, 'index'])->name('student.index');

Route::get('/directory', [StudentController::class, 'directory'])->name('student.directory');

Route::get('/student.directory', [StudentController::class, 'directory'])->name('pages.student.directory');

Route::get('/create', [StudentController::class, 'create'])->name('students.directory');

Route::post('/create', [StudentController::class, 'store'])->name('students.directory');

Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
