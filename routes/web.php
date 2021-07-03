<?php

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
    return view('index');
});
Route::get('beauty', function () {
    return view('auth.beauty');
})->name('beauty');
Route::get('doctors', function () {
    return view('auth.doctors');
})->name('doctors');
Route::get('dailyneeds', function () {
    return view('auth.dailyneeds');
})->name('dailyneeds');
Route::get('electricals', function () {
    return view('auth.electricals');
})->name('electricals');