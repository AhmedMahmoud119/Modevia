<?php

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

use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Validator;

Route::group(['middleware' => 'guest'], function () {

    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::post('/store',[\App\Http\Controllers\AppointmentController::class, 'store'])->name('store');

Route::get('/success', function () {
    return view('success');
})->name('success');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/delete-appointment/{id}', [UserController::class, 'delete'])->name('delete-appointment');
    Route::get('/export', [UserController::class, 'exportExcel'])->name('export');
    Route::get('/export-pdf', [UserController::class, 'exportPDF'])->name('export-pdf');
});


