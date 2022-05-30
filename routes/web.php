<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('users/create',[UserController::class,'create'])->name('users.create');
Route::get('users/index',[UserController::class,'index'])->name('users.index');
Route::post('users/store',[UserController::class,'store'])->name('users.store');
Route::get('users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
Route::post('users/update/{id}',[UserController::class,'update'])->name('users.update');
Route::get('users/delete/{id}',[UserController::class,'delete'])->name('users.delete');

