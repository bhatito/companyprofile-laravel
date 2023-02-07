<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/merias', [HomeController::class, 'merias']); 
Route::get('/sosialisasi', [HomeController::class, 'sosialisasi']); 
Route::get('/pembagian', [HomeController::class, 'pembagian']); 
Route::get('/index2', [HomeController::class, 'index2']); 
Route::get('/pembelajaran', [HomeController::class, 'pembelajaran']); 
Route::get('/bimbingan', [HomeController::class, 'bimbingan']); 
Route::get('/pelatihan', [HomeController::class, 'pelatihan']); 



// auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/login', [AuthController::class, 'authenticated']);

//dasboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('login');

//tentang
Route::resource('/tentang', TentangController::class);

//contact
// Route::resource('/contact', ContactController::class);
Route::resource('/contact', ContactController::class);


