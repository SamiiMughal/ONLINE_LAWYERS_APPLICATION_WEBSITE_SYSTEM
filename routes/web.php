<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Models\Category;
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
    return view('welcome');
});

Route::get('/', [HomeController::class,'index']);

Route::get('/dashboard/Admindashboard', [ServiceController::class,'dashboard'])->middleware('admin');

    // Category 

Route::get('/dashboard/Services_index', [ServiceController::class,'index'])->middleware('admin');
Route::get('/dashboard/Service_insert', [ServiceController::class,'insert'])->middleware('staff');
Route::post('/dashboard/Store', [ServiceController::class,'Store'])->middleware('admin');
Route::get('/dashboard/Service_edit/{id}', [ServiceController::class,'edit'])->middleware('staff');
Route::post('/dashboard/update/{id}', [ServiceController::class,'update'])->middleware('staff');
Route::get('/dashboard/delete/{id}', [ServiceController::class,'delete'])->middleware('admin');

    // WEBSITE 

Route::get('/layout/index', [HomeController::class,'index'])->middleware('login');
Route::get('/Home', [HomeController::class,'Home']);
Route::get('/about', [HomeController::class,'about'])->middleware('login');
Route::get('/blog', [HomeController::class,'blog'])->middleware('login');
Route::get('/contact', [HomeController::class,'contact'])->middleware('login');
Route::get('/portfolio', [HomeController::class,'portfolio'])->middleware('login');
Route::get('/service', [HomeController::class,'service'])->middleware('login');
Route::get('/single', [HomeController::class,'single'])->middleware('login');
Route::get('/team', [HomeController::class,'team'])->middleware('login');

    // LOGIN 

Route::get('/register', [HomeController::class,'register']);
Route::post('/registerstore', [HomeController::class,'registerstore']);
Route::get('/login', [HomeController::class,'login']);
Route::post('/loginstore', [HomeController::class,'loginstore']);
Route::get('/logout', [HomeController::class,'logout']);
Route::get('/update', [HomeController::class,'update']);



