<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\UtsController;


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
    return view('uts/welcome');
});

Route::get('/app', function () {
    return view('layouts/app');
});

Route::get('/form', function () {
    return view('uts/form');
});

Route::get('/uts', [UtsController::class, 'create'])->name('uts.create');
Route::post('/uts/store', [UtsController::class, 'store'])->name('uts.store');
Route::get('/uts/table', [UtsController::class, 'table'])->name('uts.table');
Route::delete('/delete/uts/show/{uts}', [UtsController::class, 'delete'])->name('uts.delete');




