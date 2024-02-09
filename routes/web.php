<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcomController;


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
Route::get('/ master', function () {
    return view('admin.layouts.master');
});
Route::get('admin/dashboard',[EcomController::class,'index'])->name('showtheproduct');
Route::get('admin/dashboard/create',[EcomController::class,'create'])->name('addtheproduct');
Route::post('/formsavegar',[EcomController::class,'store'])->name('savetheproduct');
Route::get('/producteditgarnepage/{id}',[EcomController::class,'edit'])->name('productedit');
Route::post('/productupdategar/{id}',[EcomController::class,'update'])->name('productupdate');
Route::get('/productdeletegar/{id}',[EcomController::class,'destroy'])->name('productdestroy');