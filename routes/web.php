<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [App\Http\Controllers\User1Controller::class, 'index'])->name('home');
Route::get('/users/create', [App\Http\Controllers\User1Controller::class, 'create'])->name('create');
Route::post('/user',[App\Http\Controllers\User1Controller::class,'store'])->name('user');

Route::get('/users/edit/{id}', [App\Http\Controllers\User1Controller::class, 'edit'])->name('edit');
Route::post('/users/edit/{id}', [App\Http\Controllers\User1Controller::class, 'userEdit'])->name('userEdit');

Route::get('/users/delete/{id}',[App\Http\Controllers\User1Controller::class,'userDelete'])->name('userDelete');

Route::get('/home', [App\Http\Controllers\User1Controller::class, 'index'])->name('home');
