<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PDFController;<---borrar

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
    return view('home');
});

Auth::routes();



Route::get('/pdf',[App\Http\Controllers\PDFController::class, 'pdf'])->name('exportarPdf');

Route::get('/users/export',[App\Http\Controllers\UserController::class, 'exportExcel'])->name('exportarExc');

Route::resource('users',App\Http\Controllers\UserController::class);

Route::resource('empresas',App\Http\Controllers\EmpresaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

