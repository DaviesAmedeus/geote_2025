<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('user')->latest()->paginate(10);
        return view('website.projects.index', compact('projects'));
    }

       public function show(){
                return view('website.projects.show');


    }
}
