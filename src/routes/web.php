<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\HomeController;
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

Route::get('/auth', [SessionsController::class, 'getSignin'], function () {
    // return view('auth.signin');
  
})->name('auth.signin');

Route::post('/auth', [SessionsController::class, 'postSignin'], function () {
    
});

Route::get('/reg', [SessionsController::class, 'getSignup'])->name('auth.signup');

Route::post('/reg', [SessionsController::class, 'postSignup']);

Route::get('/getOut', [SessionsController::class, 'getOut'])->name('auth.getOut');