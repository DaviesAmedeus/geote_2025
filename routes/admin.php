<?php

use App\Http\Controllers\Admin\EventController;
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


    // Event management
    Route::controller(EventController::class)->group(function(){
        Route::get('/events', 'index')->name('superadmin.events.all');
           Route::get('/events/create', 'create')->name('superadmin.events.create');
            Route::post('/events/create', 'store')->name('superadmin.events.store');
            Route::get('/events/{event}/show', 'show')->name('superadmin.events.show');
            Route::delete('/events/{event}/destroy', 'destroy')->name('superadmin.events.destroy')->withTrashed();; //Soft deletes (for trashed events)
            Route::get('/events/{event}/edit', 'edit')->name('superadmin.events.edit');
            Route::patch('/events/{event}/update', 'update')->name('superadmin.events.update');
            Route::delete('/events/{event}/trash', 'trash')->name('superadmin.events.trash'); //Soft deletes (for trashed events)
            Route::get('/events/trashed', 'trashed')->name('superadmin.events.trashed');
            Route::patch('/events/{event}/restore', 'restore')->name('superadmin.events.restore')->withTrashed(); //Restore trashed projects
    });



    // project management
    Route::controller(ProjectController::class)
        ->group(function () {
            Route::get('/projects', 'index')->name('superadmin.projects.all');
            Route::get('/projects/create', 'create')->name('superadmin.projects.create');
            Route::post('/projects/create', 'store')->name('superadmin.projects.store');
            Route::get('/projects/{project}/show', 'show')->name('superadmin.projects.show');
            Route::delete('/projects/{project}/destroy', 'destroy')->name('superadmin.projects.destroy')->withTrashed();; //Soft deletes (for trashed projects)
            Route::get('/projects/{project}/edit', 'edit')->name('superadmin.projects.edit');
            Route::patch('/projects/{project}/update', 'update')->name('superadmin.projects.update');
            Route::delete('/projects/{project}/trash', 'trash')->name('superadmin.projects.trash'); //Soft deletes (for trashed projects)
            Route::get('/projects/trashed', 'trashed')->name('superadmin.projects.trashed');
            Route::patch('/projects/{project}/restore', 'restore')->name('superadmin.projects.restore')->withTrashed(); //Restore trashed projects

        });
});
