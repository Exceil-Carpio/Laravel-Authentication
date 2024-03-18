<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use App\Http\Middleware\customAuth;
use Illuminate\Support\Facades\Route;

Route::middleware(customAuth::class)->group(function(){
    Route::get('/show', [userController:: class, 'show'])->name('user.show');
    Route::put('/update/{user}', [userController:: class, 'update'])->name('user.update');
    Route::delete('/delete/{user}', [userController:: class, 'delete'])->name('user.delete');
});

Route::get('/', [userController:: class, 'index'])->name('user.index');
Route::post('/create', [userController:: class, 'create'])->name('user.create');

Route::post('/login', [authController:: class, 'login'])->name('user.login');
Route::get('/logout', [authController:: class, 'logout'])->name('user.logout');
