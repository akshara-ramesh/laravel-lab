<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
Route::resource('students', StudentController::class);

// Lesson 1: the home page. A closure that returns a view (resources/views/home.blade.php).
Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\PageController;

Route::get('/hello/{your_name}', [PageController::class, 'hello']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/roll/{your_roll}', function (Student $your_roll) {
    return view('students.show', ['student' => $your_roll]);
});

// Lessons 2-6: you will add your routes below this line.
