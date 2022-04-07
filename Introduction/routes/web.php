<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {

    $students = [
        [
            "name" => "Nonso",
            "age" => 20
        ],
        [
            "name" => "Nonso",
            "age" => 40
        ],
        [
            "name" => "Tony",
            "age" => 35
        ]
    ];

    $data = [
        'students'=>$students
    ];

    return view('pages.home')->with($data);
});

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

Route::middleware('isadmin')->group(function(){
    Route::get('/parent', [TestController::class, 'hello_parent_page'])->name('parent');
});

Route::post('/teacher', [TestController::class, 'hello_teacher_page'])->name('teacher');

Route::fallback([TestController::class, 'fallback_page'])->name('error-page');