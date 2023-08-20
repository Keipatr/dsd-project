<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\contactUsController;
use App\Http\Middleware\StudentEmailCheck;

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

/*
Route::get('/', function () {
    return view('login');
});
*/

Route::get('/',[LoginController::class,'index']);
Route::post('/',[LoginController::class,'SignIn'])->middleware('student.email');

Route::get('contact', [LoginController::class,'ContactPage']);
Route::get('blog', [LoginController::class,'blogPage']);
Route::get('homepage', [LoginController::class,'homepage']);
Route::post('signup',[RegisterController::class,'register'])->name('register');


Route::post('contactSubmit',[contactUsController::class,'contactSubmit'])->name('contactSubmit');
