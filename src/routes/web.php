<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudeController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/1971-1980',[HomeController::class, 'book1971_1980'])->name('1971-1980');
Route::get('/1981-1990',[HomeController::class, 'book1981_1990'])->name('1981-1990');
Route::get('/1991-2000',[HomeController::class, 'book1991_2000'])->name('1991-2000');
Route::get('/2001-2010',[HomeController::class, 'book2001_2010'])->name('2001-2010');



Route::get('/auth', [SessionsController::class, 'getSignin'], function () {
    // return view('auth.signin');
  
})->name('auth.signin');



Route::post('/auth', [SessionsController::class, 'postSignin'], function () {
    
});

Route::get('/reg', [SessionsController::class, 'getSignup'])->name('auth.signup');

Route::post('/reg', [SessionsController::class, 'postSignup']);

Route::get('/getOut', [SessionsController::class, 'getOut'])->name('auth.getOut');


Route::resource('/crude', CrudeController::class);

Route::resource('posts', PostController::class);
Route::resource('users', UserController::class);

Route::get('/login/google', [SessionsController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SessionsController::class, 'handleGoogleCallback']);

Route::get('/login/facebook', [SessionsController::class, 'redirectToFaceBook'])->name('login.facebook');
Route::get('/login/facebook/callback', [SessionsController::class, 'handleFaceBookCallback']);

