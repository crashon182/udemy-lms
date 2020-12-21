<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InstructorCourses;
use App\Http\Controllers\Instructor\CourseController;

Route::redirect('','instructor/courses');
//Debido a que en el RouteServiceProvider se coloco el prefix instructor, la ruta seria / instructor/courses
Route::resource('courses',CourseController::class)->names('courses');

