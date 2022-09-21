<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoggedIn;

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

Route::get('/', function () { return view('welcome'); })->middleware('auth');

Route::get("/fullcalendar", "App\Http\Controllers\Controller@Chartjs")->middleware('auth');
Route::get("/addActivities", [Controller::class, 'addActivities']);
Route::post("/addActivity", [Controller::class, 'addActivity']);

Route::get("/layout", function() { return view('layout'); })->middleware('auth');

Route::get("/inloggen", [PageController::class, 'loginPage'])->name('login')->middleware(LoggedIn::class);

Route::post("/inloggen/send", [AuthController::class, 'login']);
