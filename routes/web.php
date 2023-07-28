<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\contactUsController;

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
Route::post('/',[LoginController::class,'SignIn']);

Route::get('contact', [LoginController::class,'ContactPage']);

Route::post('signup',[RegisterController::class,'register'])->name('register');
// Route::get('contact', function () {
//     return view('contact');
// });

Route::post('contactSubmit',[contactUsController::class,'contactSubmit'])->name('contactSubmit');

Route::get('homepage', function () {
    return view('homepage');
});