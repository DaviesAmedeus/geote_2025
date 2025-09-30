<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\OverViewController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\ProgramController;
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



    // Event Posts management
    Route::controller(EventController::class)->group(function () {
        Route::get('/events/geosparks', 'geosparks')->name('superadmin.events.geosparks');
        Route::get('/events/mapathons', 'mapathons')->name('superadmin.events.mapathons');

        Route::get('/events/create', 'create')->name('superadmin.events.create');
        Route::post('/events/create', 'store')->name('superadmin.events.store');
        Route::get('/events/{event}/show', 'show')->name('superadmin.events.show');
        Route::get('/events/{event}/edit', 'edit')->name('superadmin.events.edit');
        Route::patch('/events/{event}/update', 'update')->name('superadmin.events.update');

        Route::delete('/events/{event}/trash', 'trash')->name('superadmin.events.trash'); //Soft deletes (for trashed events)
        Route::get('/events/trashed/geosparks', 'trashedGeosparks')->name('superadmin.events.trashed.geosparks');
        Route::get('/events/trashed/mapathons', 'trashedMapathons')->name('superadmin.events.trashed.mapathons');
        Route::delete('/events/{event}/destroy', 'destroy')->name('superadmin.events.destroy')->withTrashed();; //Soft deletes (for trashed events)
        Route::patch('/events/{event}/restore', 'restore')->name('superadmin.events.restore')->withTrashed(); //Restore trashed projects

    });


     // Program Posts management
    Route::controller(ProgramController::class)->group(function () {
        Route::get('/programs/fpts', 'fpts')->name('superadmin.programs.fpts');
        Route::get('/programs/shortcourses', 'shortcourses')->name('superadmin.programs.shortcourses');

        Route::get('/programs/create', 'create')->name('superadmin.programs.create');
        Route::post('/programs/create', 'store')->name('superadmin.programs.store');
        Route::get('/programs/{program:slug}/show', 'show')->name('superadmin.programs.show');
        Route::get('/programs/{program:slug}/edit', 'edit')->name('superadmin.programs.edit');
        Route::patch('/programs/{program:slug}/update', 'update')->name('superadmin.programs.update');

        Route::delete('/programs/{program:slug}/trash', 'trash')->name('superadmin.programs.trash'); //Soft deletes (for trashed programs)

        Route::get('/programs/trashed/fpts', 'trashedFpts')->name('superadmin.programs.trashed.trashedFpts');
        Route::get('/programs/trashed/shortcourses', 'trashedShortcourses')->name('superadmin.programs.trashed.trashedShortcourses');

        Route::delete('/programs/{program:slug}/destroy', 'destroy')->name('superadmin.programs.destroy')->withTrashed();; //Soft deletes (for trashed events)
        Route::patch('/programs/{program:slug}/restore', 'restore')->name('superadmin.programs.restore')->withTrashed(); //Restore trashed projects

    });

    //Event categories
    Route::controller(EventCategoryController::class)->group(function () {
        Route::get('/events/categories', 'index')->name('superadmin.events.categories');
        Route::post('/events/categories/create', 'store')->name('superadmin.events.categories.store');
        Route::patch('/events/categories/{category}/update', 'update')->name('superadmin.events.categories.update');
        Route::get('/events/categories/{category}/show', 'show')->name('superadmin.events.categories.show');
        Route::delete('/events/categories/{category}/destroy', 'destroy')->name('superadmin.events.categories.destroy');
    });


    // project management
    Route::controller(ProjectController::class)
        ->group(function () {
            Route::get('/projects', 'index')->name('superadmin.projects.all');
            
            Route::get('/projects/create', 'create')->name('superadmin.projects.create');
            Route::post('/projects/create', 'store')->name('superadmin.projects.store');
            Route::get('/projects/{project}/show', 'show')->name('superadmin.projects.show');
            Route::delete('/projects/{project}/destroy', 'destroy')->name('superadmin.projects.destroy')->withTrashed(); //Soft deletes (for trashed projects)
            Route::get('/projects/{project}/edit', 'edit')->name('superadmin.projects.edit');
            Route::patch('/projects/{project}/update', 'update')->name('superadmin.projects.update');
            Route::delete('/projects/{project}/trash', 'trash')->name('superadmin.projects.trash'); //Soft deletes (for trashed projects)
            Route::get('/projects/trashed', 'trashed')->name('superadmin.projects.trashed');
            Route::patch('/projects/{project}/restore', 'restore')->name('superadmin.projects.restore')->withTrashed(); //Restore trashed projects

        });
});
