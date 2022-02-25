<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');

Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');


Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');

Route::get('/about-us', [InformationController::class, 'index'])->name('information.about');
