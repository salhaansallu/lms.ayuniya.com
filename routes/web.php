<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('student.dashboard');
});

Route::get('/subjects', function () {
    return view('student.subjects');
});

Route::get('/assignments', function () {
    return view('student.assignment');
});

Route::get('instructor/dashboard', function () {
    return view('instructor.dashboard');
});

Route::get('instructor/assignments', function () {
    return view('instructor.assignment');
});

Route::get('instructor/subjects', function () {
    return view('instructor.subjects');
});


Route::get('instructor/create-course', function () {
    return view('instructor.create-course');
});

Route::get('admin', function () {
    return view('admin.dashboard');
});

Route::get('student-list', function () {
    return view('admin.students');
});

Route::get('student-create', function () {
    return view('admin.student-create');
});

Route::get('instructor-list', function () {
    return view('admin.instructor');
});

Route::get('instructor-create', function () {
    return view('admin.instructor-create');
});

Route::get('subject-list', function () {
    return view('admin.subject');
});

Route::get('subject-create', function () {
    return view('admin.subject-create');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
