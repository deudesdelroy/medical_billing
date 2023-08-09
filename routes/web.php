<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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
})->name('index');
Route::get('/business/index', [CompanyController::class, 'index'])->name('business.index');
Route::get('/business/edit}', [CompanyController::class, 'edit'])->name('business.first');
Route::get('/business/edit/{business_data}', [CompanyController::class, 'edit'])->name('business.edit');
Route::post('/business/store', [CompanyController::class, 'store'])->name('business.store');
