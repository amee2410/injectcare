<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FeatureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\MissionvisionController;
use App\Http\Controllers\Product_categoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\productController;
use App\Http\Controllers\TeamController;

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
    return redirect()->route('index.index');
});
Route::get('/contact-us',[Maincontroller::class, 'contact'])->name('contact-us');
Route::resource('/product', productController::class);
Route::resource('/blogs',blogController::class);
Route::get('/about-us',[Maincontroller::class, 'about'])->name('about-us');
Route::get('/career',[Maincontroller::class, 'career'])->name('career');

Auth::routes();
//admin side
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/index', Maincontroller::class);
Route::resource('/Banner', BannerController::class);
Route::resource('/Feature', FeatureController::class);
Route::resource('/About', AboutusController::class);
Route::resource('/Counter', CounterController::class);
Route::resource('/ContactUs', ContactusController::class);
Route::resource('/Team', TeamController::class);
Route::resource('/Department', DepartmentController::class);
Route::resource('/Category', Product_categoryController::class);
Route::resource('/Clients', ClientsController::class);
Route::resource('/Certificate', CertificateController::class);
Route::resource('/Products', ProductsController::class);
Route::resource('/Blogs', BlogsController::class);
Route::resource('/Mission_Vision', MissionvisionController::class);
