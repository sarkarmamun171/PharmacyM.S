<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicineController;
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
    //Customer Information
    Route::get('/admin/custmer/add',[CustomerController::class,'customer_add'])->name('customer.add');
    Route::get('/admin/custmer/list',[CustomerController::class,'customer_list'])->name('customer.list');
    Route::post('/customer/store',[CustomerController::class,'customer_store'])->name('customer.store');
    Route::get('/customer/edit/{id}',[CustomerController::class,'customer_edit'])->name('customer.edit');
    Route::post('/customer/update/{id}',[CustomerController::class,'customer_update'])->name('customer.update');
    Route::get('/customer/delete/{id}',[CustomerController::class,'customer_delete'])->name('customer.delete');

    //Medicines
    Route::get('/admin/medicine/add',[MedicineController::class,'medicine_add'])->name('medicine.add');
    Route::get('/admin/medicine/list',[MedicineController::class,'medicine_list'])->name('medicine.list');
    Route::post('/admin/medicine/store',[MedicineController::class,'medicine_store'])->name('medicine.store');
    Route::get('/admin/medicine/edit/{id}',[MedicineController::class,'medicine_edit'])->name('medicine.edit');
    Route::post('/admin/medicine/update/{id}',[MedicineController::class,'medicine_update'])->name('medicine.update');
});
