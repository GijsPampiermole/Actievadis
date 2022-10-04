<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::post("/addActivity", [Controller::class, 'addActivity'])->middleware('auth');

Route::get("/layout", function() { return view('layout'); })->middleware('auth');

Route::get("/addActivities", [PageController::class, 'addActivities'])->middleware('auth');

Route::get("/activities", [PageController::class, 'activities']);

Route::get("/inloggen", [PageController::class, 'loginPage'])->name('login')->middleware(LoggedIn::class);

Route::get("/uitloggen", [AuthController::class, 'logout']);

Route::post("/inloggen/send", [AuthController::class, 'login']);

Route::post("/admin/users/create", [UserController::class, 'create']);

Route::post("/admin/users/update", [UserController::class, 'update']);

Route::post("/admin/users/delete", [UserController::class, 'delete']);
