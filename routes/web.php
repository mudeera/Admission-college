<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/', [App\Http\Controllers\FrontPageController::class, 'welcome'])->name('welcome');
Route::get('/About', [App\Http\Controllers\FrontPageController::class, 'About'])->name('About');
Route::get('/Contact', [App\Http\Controllers\FrontPageController::class, 'Contact'])->name('Contact');
Route::get('/Course', [App\Http\Controllers\FrontPageController::class, 'Course'])->name('Course');
Route::get('/Event', [App\Http\Controllers\FrontPageController::class, 'Event'])->name('Event');
Route::get('/Blog', [App\Http\Controllers\FrontPageController::class, 'Blog'])->name('Blog');
Route::get('/Apply', [App\Http\Controllers\ApplyController::class, 'Apply'])->name('Apply');
Route::get('apply/create', [App\Http\Controllers\ApplyController::class, 'create'])->name('apply.create');

Route::get('/application/create', [App\Http\Controllers\applicationController::class, 'create'])->name('application.create');
Route::post('/application/store', [App\Http\Controllers\applicationController::class, 'store'])->name('application.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/application/admissions', [App\Http\Controllers\applicationController::class, 'admissions'])->name('application.admissions');

Route::middleware(['auth'])->group(function () {
    Route::get('/applications/filter', [App\Http\Controllers\ApplicationController::class, 'filter'])->name('applications.filter');
    
    Route::get('/student', [App\Http\Controllers\studentController::class, 'index'])->name('student.index');
    Route::get('/student/create', [App\Http\Controllers\studentController::class, 'create'])->name('student.create');
    Route::post('/student/store', [App\Http\Controllers\studentController::class, 'store'])->name('student.store');
    Route::get('student/show/{id}', [App\Http\Controllers\studentController::class, 'show'])->name('student.show');
    Route::get('/student/{id}', [App\Http\Controllers\studentController::class, 'edit'])->name('student.edit');
    Route::patch('/student/{id}', [App\Http\Controllers\studentController::class, 'update'])->name('student.update');
    Route::delete('/student/{id}', [App\Http\Controllers\studentController::class, 'destroy'])->name('student.destroy');
    
    Route::get('/applicationModel', [App\Http\Controllers\ApplicationModelController::class, 'index'])->name('applicationModel.index');
    Route::get('/applicationModel/create', [App\Http\Controllers\ApplicationModelController::class, 'create'])->name('applicationModel.create');
    Route::post('/applicationModel/store', [App\Http\Controllers\ApplicationModelController::class, 'store'])->name('applicationModel.store');
    Route::get('/applicationModel/{id}', [App\Http\Controllers\ApplicationModelController::class, 'edit'])->name('applicationModel.edit');
    Route::patch('/applicationModel/{id}', [App\Http\Controllers\ApplicationModelController::class, 'update'])->name('applicationModel.update');

    Route::get('/blog', [App\Http\Controllers\blogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [App\Http\Controllers\blogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [App\Http\Controllers\blogController::class, 'store'])->name('blog.store');
    Route::get('blog/show/{id}', [App\Http\Controllers\blogController::class, 'show'])->name('blog.show');
    Route::get('/blog/{id}', [App\Http\Controllers\blogController::class, 'edit'])->name('blog.edit');
    Route::patch('/blog/{id}', [App\Http\Controllers\blogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [App\Http\Controllers\blogController::class, 'destroy'])->name('blog.destroy');

    Route::get('/event', [App\Http\Controllers\eventController::class, 'index'])->name('event.index');
    Route::get('/event/create', [App\Http\Controllers\eventController::class, 'create'])->name('event.create');
    Route::post('/event/store', [App\Http\Controllers\eventController::class, 'store'])->name('event.store');
    Route::get('event/show/{id}', [App\Http\Controllers\eventController::class, 'show'])->name('event.show');
    Route::get('/event/{id}', [App\Http\Controllers\eventController::class, 'edit'])->name('event.edit');
    Route::patch('/event/{id}', [App\Http\Controllers\eventController::class, 'update'])->name('event.update');
    Route::delete('/event/{id}', [App\Http\Controllers\eventController::class, 'destroy'])->name('event.destroy');

    Route::get('/course', [App\Http\Controllers\courseController::class, 'index'])->name('course.index');
    Route::get('/course/create', [App\Http\Controllers\courseController::class, 'create'])->name('course.create');
    Route::post('/course/store', [App\Http\Controllers\courseController::class, 'store'])->name('course.store');
    Route::get('course/show/{id}', [App\Http\Controllers\courseController::class, 'show'])->name('course.show');
    Route::get('/course/{id}', [App\Http\Controllers\courseController::class, 'edit'])->name('course.edit');
    Route::patch('/course/{id}', [App\Http\Controllers\courseController::class, 'update'])->name('course.update');
    Route::delete('/course/{id}', [App\Http\Controllers\courseController::class, 'destroy'])->name('course.destroy');

    Route::get('/application', [App\Http\Controllers\applicationController::class, 'index'])->name('application.index');
    Route::get('/application/statistics', [App\Http\Controllers\applicationController::class, 'statistics'])->name('application.statistics');
    Route::get('/application/students-short-list', [App\Http\Controllers\applicationController::class, 'studentsShortList'])->name('application.students-short-list');
    Route::get('/application/students-years-list', [App\Http\Controllers\applicationController::class, 'studentsYearList'])->name('application.students-years-list');
    Route::get('application/show/{id}', [App\Http\Controllers\applicationController::class, 'show'])->name('application.show');
    Route::get('/application/{id}', [App\Http\Controllers\applicationController::class, 'edit'])->name('application.edit');
    Route::patch('/application/{id}', [App\Http\Controllers\applicationController::class, 'update'])->name('application.update');
    Route::delete('/application/{id}', [App\Http\Controllers\applicationController::class, 'destroy'])->name('application.destroy');

    Route::get('/marks.create', [App\Http\Controllers\MarksController::class, 'create'])->name('marks.create');
    Route::post('/marks.store', [App\Http\Controllers\MarksController::class, 'store'])->name('marks.store');
    Route::patch('/marks.update', [App\Http\Controllers\MarksController::class, 'update'])->name('marks.update');
    Route::get('/mark/{id}', [App\Http\Controllers\HomeController::class, 'showApplication'])->name('mark.show');

});