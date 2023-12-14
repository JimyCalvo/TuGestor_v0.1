<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware(['role: 1'])->group(function () {
        Route::get('/employee-home',  [HomeController::class, 'employeeHome'])->name('employee.home');

    });
    Route::middleware(['role: 2'])->group(function () {
        Route::get('/home-supervisor',  [HomeController::class, 'supervisorHome'])->name('supervisor.home');

    });
    Route::middleware(['role: 3'])->group(function () {
        Route::get('/home-admin',  [HomeController::class, 'adminHome'])->name('admin.home');

    });
    Route::middleware(['role: 4'])->group(function () {
        Route::get('/home-super_admin',  [HomeController::class, 'superAdminHome'])->name('super-admin.home');

    });

});
