<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('students')->group(function(){
    Route::get('/subjects', [StudentController::class, 'subjects'])->name('students.subjects');
    Route::get('/profile', [StudentController::class, 'profile'])->name('students.profile');
    Route::get('/grades',  [StudentController::class, 'grades'])->name('students.grades');
    
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
