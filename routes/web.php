<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\LoginController;
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
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/registration',[LoginController::class,'registration'])->name('registration');
Route::post('/postregistration',[LoginController::class,'postregistration'])->name('postregistration');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('index',[Categorycontroller::class,'index'])->name('index');
Route::get('create',[Categorycontroller::class,'create'])->name('create');
Route::post('insert',[Categorycontroller::class,'insert'])->name('insert');
Route::get('edit/{id}',[Categorycontroller::class,'edit'])->name('edit');
Route::post('update/{id}',[Categorycontroller::class,'update'])->name('update');
Route::get('delete/{id}',[Categorycontroller::class,'delete'])->name('delete');
