<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Auth
Route::get('/',[AuthController::class,'login'])->name('login');
Route::get('/forgot',[AuthController::class,'forgot'])->name('forgot');
Route::post('/login-post',[AuthController::class,'login_post'])->name('login.post');
Route::get('lagout',[AuthController::class,'logout'])->name('logout');
Route::post('forgot-post',[AuthController::class,'forgot_post'])->name('forgot.post');

//Dashboard
Route::group(['middleware'=='admin'],function(){
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
});
