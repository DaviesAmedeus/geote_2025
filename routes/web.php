<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

// Returns views of static pages on the website
Route::view('/',  'website.index')->name('home');
Route::view('/about', 'website.about')->name('about');
Route::view('/mapathons',  'website.mapathons')->name('mapathons');
Route::view('/geospark',  'website.geospark')->name('geospark');
Route::view('/fpt',  'website.fpt')->name('fpt');
Route::view('/shortcourses',  'website.shortcourses')->name('shortcourses');
Route::view('/mentorship',  'website.mentorship')->name('mentorship');


Route::controller(ProjectController::class)->group(function () {
    Route::get('/projects', 'index')->name('projects');
    Route::get('/projects/{project}/show', 'show')->name('projects.show');
});


// Auth
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');



require __DIR__.'/admin.php';
require __DIR__.'/staff.php';

// fallback
Route::fallback(fn() => view('website.about'));

