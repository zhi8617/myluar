<?php

use Illuminate\Support\Facades\Route;

// Sudo Password:
// ChTTXs4nx3HM5bPIlyCT
// Database Password:
// GKEXY64iySaHs9WKnHmd
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

Route::get('/', function () {
    return view('welcome');
});
