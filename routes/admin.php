<?php


use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::middleware('auth', 'is_admin')->group(function(){

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

});