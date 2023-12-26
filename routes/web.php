<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller;

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

Route::get('testHome',[Controller::class, 'home'])->name('home');
Route::get('contact',[Controller::class, 'contact'])->name('contact');
Route::get('guard',[Controller::class, 'guard'])->name('guard');
Route::get('service',[Controller::class, 'service'])->name('service');
Route::get('about',[Controller::class, 'about'])->name('about');