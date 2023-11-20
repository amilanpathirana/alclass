<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentController;
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

Route::get('/subject',[SubjectController::class, 'index'])->name('subject.index');
Route::get('/subject/create',[SubjectController::class, 'create'])->name('subject.create');
Route::post('/subject',[SubjectController::class, 'store'])->name('subject.store');

Route::get('/student',[StudentController::class, 'index'])->name('student.index');
Route::get('/student/create',[StudentController::class, 'create'])->name('student.create');
Route::post('/student',[StudentController::class, 'stores'])->name('student.stores');

Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');