<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\questionController;
use App\Http\Controllers\regisLeaderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', [questionController::class, 'getHomePage'])->name('getHomePage');

Route::post('/index', [questionController::class, 'createQuestion'])->name('createQuestion');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', [AuthLoginController::class, 'getLoginPage'])->name('getLoginPage');

// Route::get('/login', function () {
//     return view('login');
// });

Route::post('/crateLeader', [regisLeaderController::class, 'createLeader'])->name('createLeader');
