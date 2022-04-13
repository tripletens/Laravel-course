<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checkage;

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

Route::get('/', [HomeController::class,'homepage'])->name('landing-page');

Route::post('/submit_form', [HomeController::class,'submit_form'])->name('submit_form_page');

Route::get('/about', function () {
    return view('pages.about');
});



Route::name('hello.')->group(function () {
    Route::get('/home', [TestController::class, 'hello_page'])->name('home');

    Route::middleware('checkage')->group(function () {
        Route::get('/student/{age?}', [TestController::class, 'hello_student_page'])->name('student');
    });

    // Route::get('/teacher', [TestController::class, 'hello_teacher_page'])->name('teacher');

});

// Route::middleware('isadmin')->group(function(){
    Route::get('/parent', [TestController::class, 'hello_parent_page'])->name('parent');
// });

Route::post('/teacher', [TestController::class, 'hello_teacher_page'])->name('teacher');



Route::fallback([TestController::class, 'fallback_page'])->name('error-page');