<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller;
use App\Http\Controllers\ExampleController;
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

Route::get('testHome',[ExampleController::class, 'home'])->name('home');
Route::get('contact',[ExampleController::class, 'contact'])->name('contact');
Route::get('guard',[ExampleController::class, 'guard'])->name('guard');
Route::get('service',[ExampleController::class, 'service'])->name('service');
Route::get('about',[ExampleController::class, 'about'])->name('about');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
