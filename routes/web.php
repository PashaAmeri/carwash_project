<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\homeController;
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
