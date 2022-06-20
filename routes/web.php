<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ChangeReservationController;

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

Route::get('/', [homeController::class, 'homeRender'])->name('home');
Route::resource("reserve", FormController::class);
Route::get("reservation/{code}", [ReservationController::class, 'show']);
Route::get('edit/{code}', [ChangeReservationController::class, 'editFormResnder']);
Route::get('dashboard', [DashboardController::class, 'dashboardRender']);

Route::get("login", [LoginController::class, 'loginRender']);
Route::post("login", [LoginController::class, 'doLogin'])->name('login.post');

Route::get("register", [RegisterController::class, 'RegisterRender']);
Route::post("register", [RegisterController::class, 'doRegister'])->name('register.post');
