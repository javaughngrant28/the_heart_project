<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/logIn',[LogInController::class,'loadLogInView'])->name('logInPage');
//
//Route::get('/signUp',[LogInController::class,'loadSignUpView'])->name('signUpPage');

Route::get('/profile',[ProfileController::class,'profileView'])->name('profilePage');

Route::get('/pay',[CourseController::class,'payView'])->name('payPage');

Route::POST('/pay',[CourseController::class,'payViewR'])->name('payPageR');

Route::get('/create',[CourseController::class,'createView'])->name('createPage');

Route::POST('/create',[CourseController::class,'createViewR'])->name('createPageR');

Route::get('/course{id}',[CourseController::class,'courseView'])->name('coursePage');

Route::get('/update/course/status{val}',[CourseController::class,'updateCourseView'])->name('updateCoursePage');

Route::get('/course/edit{id}',[CourseController::class,'courseEditView'])->name('editCourse');

Route::get('/student/profile{id}',[ProfileController::class,'studentProfileView'])->name('studentProfile');

Route::POST('/course/edit{id}',[CourseController::class,'courseEditViewR'])->name('saveEditCourse');

Route::get('/course/all',[CourseController::class,'allCourseView'])->name('allCoursePage');

Route::POST('/course',[CourseController::class,'courseViewR'])->name('coursePageR');

Route::get('/updateProfile',[ProfileController::class,'updateProfileView'])->name('updateProfilePage');

Route::POST('/updateProfile',[ProfileController::class,'updateProfileR'])->name('updateProfileR');

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/aboutUs', [\App\Http\Controllers\HomeController::class, 'aboutUsView'])->name('aboutUs');


