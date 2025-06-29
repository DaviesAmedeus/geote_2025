<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('website.projects.index');
    }

       public function show(){
                return view('website.projects.show');


    }
}
