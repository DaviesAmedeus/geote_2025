<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::controller(WebsiteController::class)->group(function(){
    Route::get('/',  'index')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/engagements',  'engagements')->name('engagements');

    Route::get('/mapathons',  'mapathons')->name('mapathons');
    Route::get('/geospark',  'geospark')->name('geospark');
    Route::get('/fpt',  'fpt')->name('fpt');
    Route::get('/shortcourses',  'shortcourses')->name('shortcourses');
    Route::get('/mentorship',  'mentorship')->name('mentorship');



});