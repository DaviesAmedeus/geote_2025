<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OverViewController;
use App\Http\Controllers\Admin\UserManagementController;


Route::middleware(['auth', 'role:superAdmin'])->prefix('super-admin')->group(function () {

    // Overview
    Route::controller(OverViewController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('superadmin.dashboard');
    });


    // User management
    Route::controller(UserManagementController::class)
        ->group(function () {
            Route::get('/users', 'index');
        });


});
