<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\BlogController;

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

Route::get('/',[studentcontroller::class,'index'])->name('home');
Route::post('/new-student',[studentcontroller::class,'create'])->name('new-student');
Route::post('/create-blog',[BlogController::class,'create'])->name('create-blog');
Route::get('/manage-student',[studentController::class,'manage'])->name('manage-student');
Route::get('/add-blog',[BlogController::class,'index'])->name('add-blog');
Route::get('/manage-blog',[BlogController::class,'show'])->name('manage-blog');
Route::get('/edit-student/{id}',[studentcontroller::class,'edit'])->name('edit-student');
Route::post('/delete-student/{id}',[studentcontroller::class,'delete'])->name('delete-student');

Route::get('/edit-blog/{id}',[BlogController::class,'edit'])->name('edit-blog');
