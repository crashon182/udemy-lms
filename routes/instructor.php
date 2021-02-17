<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InstructorCourses;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CourseCurriculum;
use App\Http\Livewire\Instructor\CoursesStudents;

Route::redirect('','instructor/courses');
//Debido a que en el RouteServiceProvider se coloco el prefix instructor, la ruta seria / instructor/courses
Route::resource('courses',CourseController::class)->middleware('can:Actualizar cursos')->names('courses');

Route::get('courses/{course}/curriculum', CourseCurriculum::class)->name('courses.curriculum');

Route::get('courses/{course}/goals',[CourseController::class, 'goal'])->name('courses.goals');
Route::get('courses/{course}/students',CoursesStudents::class)->middleware('can:Actualizar cursos')->name('courses.students');

Route::post('courses/{course}/status',[CourseController::class, 'status'])->name('courses.status');

