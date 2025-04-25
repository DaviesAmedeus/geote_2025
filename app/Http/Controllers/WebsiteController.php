<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function about()
    {
        return view('website.about');
    }

    public function engagements()
    {
        return view('website.engagements');
    }

    public function mapathons()
    {
        return view('websitee.mapathons');
    }

    public function geospark()
    {
        return view('website.geospark');
    }

    public function fpt()
    {
        return view('website.fpt');
    }

    public function shortcourses()
    {
        return view('website.shortcourses');
    }

    public function mentorship()
    {
        return view('website.mentorship');
    }
}

