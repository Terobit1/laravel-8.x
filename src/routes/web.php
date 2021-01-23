<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/auth', [SessionsController::class, 'getSignin'], function () {
    // return view('auth.signin');
})->name('auth.signin');;
Route::post('/auth', [SessionsController::class, 'postSignin'], function () {
    
});