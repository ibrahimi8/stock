<?php

use  App\Http\Controllers\productController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\settingsController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dash', function () {
    return view('dashboard');
})->middleware('auth');
//                               sales

Route::get('/indexSales',[salesController::class,'index'])->name('sales.index');
Route::get('/addSales',[salesController::class,'create'])->name('sales.add');
Route::get('/editSales{id?}',[salesController::class,'edit'])->name('sales.edit');
Route::get('/updateSales{id?}',[salesController::class,'update'])->name('sales.update');
Route::get('/deleteSales{id?}',[salesController::class,'destroy'])->name('sales.delete');
Route::get('/salesadd',[salesController::class,'show'])->name('sales.show');


//                               product

Route::get('/indexProduct',[productController::class,'index'])->name('product.index');
Route::get('/addProduct',[productController::class,'create'])->name('product.add');
Route::get('/editProduct{id?}',[productController::class,'edit'])->name('product.edit');
Route::get('/updateProduct{id?}',[productController::class,'update'])->name('product.update');
Route::get('/deleteProduct{id?}',[productController::class,'destroy'])->name('product.delete');
Route::get('/productadd', function () {
    return view('product.add');
});

//                                settings
Route::get('/indexSettings',[settingsController::class,'index'])->name('settings.index');
Route::get('updateSettings{id?}', [settingsController::class, 'update'])->name('settings.update');
//                                 login
Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//                                   PDF
Route::get('/exportPdf{id?}', [salesController::class, 'generatePDF']);
