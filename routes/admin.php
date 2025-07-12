<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OverViewController;
use App\Http\Controllers\Admin\ProjectController;
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


    // project management
    Route::controller(ProjectController::class)
        ->group(function () {
            Route::get('/projects', 'index');
            Route::get('/projects/create', 'create');
            Route::post('/projects/create', 'store');
            Route::get('/projects/{project}/show', 'show');
            Route::get('/projects/{project}/edit', 'edit');
            Route::patch('/projects/{project}/update', 'update');
            Route::delete('/projects/{project}/destroy', 'destroy');
        });
});
