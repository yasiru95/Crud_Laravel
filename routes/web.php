<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\student;
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

Route::get('/Teacher/all', function () {
  return view('Teacher.create');
});

Route::resource('teacher', TeacherController::class);

// Route::get('/insert', function () {

//  $student = student::create([
//     'name' => 'John 2',
//     'tp' => '123456789',
// ]);

// return $student;
// });

Route::get('/', [StudentController::class, 'index']);
Route::get('/insert', [StudentController::class, 'store']);

