<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SuppliersController;
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
    Route::post('/admin/medicine/update/{id}',[MedicineController::class,'medicine_update'])->name('medicine.update');
    Route::get('/admin/medicine/delete/{id}',[MedicineController::class,'medicine_delete'])->name('medicine.delete');

    //Medicine stock
    Route::get('/admin/medicine/stock/add',[MedicineController::class,'medicine_stock_add'])->name('medicine.stock.add');
    Route::get('/admin/medicine/stock/list',[MedicineController::class,'medicine_stock_list'])->name('medicine.stock.list');
    Route::post('/admin/medicine/stock/store',[MedicineController::class,'medicine_stock_store'])->name('medicine.stock.store');
    Route::get('/admin/medicine/stock/edit{id}',[MedicineController::class,'medicine_stock_edit'])->name('medicine.stock.edit');
    Route::get('/admin/medicine/stock/delete{id}',[MedicineController::class,'medicine_stock_delete'])->name('medicine.stock.delete');

    //Suppliers
    Route::get('/admin/supplier/list',[SuppliersController::class,'suppiler_list'])->name('supplier.list');
    Route::get('/admin/supplier/add',[SuppliersController::class,'supplier_add'])->name('supplier.add');
    Route::post('/admin/supplier/store',[SuppliersController::class,'supplier_store'])->name('supplier.store');
    Route::get('/admin/supplier/edit/{id}',[SuppliersController::class,'supplier_edit'])->name('supplier.edit');
    Route::get('/admin/supplier/delete/{id}',[SuppliersController::class,'supplier_delete'])->name('supplier.delete');
    Route::post('/admin/supplier/update/{id}',[SuppliersController::class,'supplier_update'])->name('supplier.update');

    //Invoice
    Route::get('/admin/invoice/list',[InvoicesController::class,'invoice_list'])->name('invoice.list');
    Route::get('/admin/invoice/add',[InvoicesController::class,'invoice_add'])->name('invoice.add');
    Route::post('/admin/invoice/store',[InvoicesController::class,'invoice_store'])->name('invoice.store');
    Route::get('/admin/invoice/edit/{id}',[InvoicesController::class,'invoice_edit'])->name('invoice.edit');
    Route::post('/admin/invoice/update/{id}',[InvoicesController::class,'invoice_update'])->name('invoice.update');
    Route::get('/admin/invoice/delete/{id}',[InvoicesController::class,'invoice_delete'])->name('invoice.delete');
});
