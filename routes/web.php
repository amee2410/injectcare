<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;

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
//front side
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return redirect()->route('index.index');
});

Auth::routes();
//admin side
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/index', Maincontroller::class);
