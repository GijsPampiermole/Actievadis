<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get("/fullcalendar", [Controller::class, 'Chartjs']);
Route::get("/addActivities", [Controller::class, 'addActivities']);
Route::post("/addActivity", [Controller::class, 'addActivity']);

Route::get("/layout", function() { return view('layout'); });