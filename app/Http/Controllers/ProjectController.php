<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('user')->where('status', '!=', 'pending')->latest()->paginate(6);
        return view('website.projects.index', compact('projects'));
    }

    public function show(Project $project)
    {

        $otherProjects = Project::where('id', '!=', $project->id)->where('status', '!=', 'pending')->latest()->take(5)->get();

        return view('website.projects.show', compact('project', 'otherProjects'));
    }
}
