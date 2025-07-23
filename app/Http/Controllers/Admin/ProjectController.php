<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('user')->latest()->paginate(10);
        return view('superadmin.projects.index', [
            'projects' => $projects
        ]);
    }

    public function show(Project $project)
    {
        return response()->json([
            'title' => $project->title ?? 'No title',
            'subtitle' => $project->subtitle ?? 'No subtitle',
            'created_by' => $project->user->name ?? 'No title',
            'description' => $project->description ?? 'No description',
            'achievements' => $project->achievements ?: [],
            'start_date' => optional($project->start_date)->format('d M Y') ?? 'Not set',
            'end_date' => optional($project->end_date)->format('d M Y') ?? 'Not set',
            'image' => $project->image ? "/storage/{$project->image}" : null,
                        'status' => $project->status ?? 'No Status',
                  'pdf_link' => $project->pdf_link ?? 'No pdf_link',
                  'other_imgs' => $project->other_imgs ?? 'No other_imgs',

            'created_at' => optional($project->created_at)->format('d M Y') ?? 'Not set',
            'updated_at' => optional($project->updated_at)->format('d M Y') ?? 'Not set',

        ]);
    }

    public function create()
    {
        $projects = Project::with('user')->latest()->paginate(10);
        return view('superadmin.projects.create', [
            'projects' => $projects
        ]);
    }

    public function store(Request $request)
    {

        $attr = $request->validate([

            'title' => ['required', 'string', 'max:250'],
            'start_date' => ['required', 'date'],
            'end_date' => ['nullable', 'date'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048',     'dimensions:width=1080,height=500'], // At least 1080×500 (but not exact)
            'description' => ['required'],
            'achievements' => 'sometimes|array',
            'achievements.*' => 'string|max:255',
            'pdf_link' => [
                'nullable',
                'url', // Valid URL format
                'active_url', // Verify DNS record exists
                'starts_with:https://', // Force HTTPS
                'max:255', // Reasonable length limit
                // 'regex:/\.pdf$/i', // Ends with .pdf (case insensitive)
            ],
            'other_imgs' => [
                'nullable',
                'url',
                'starts_with:https://',
                'regex:/^https:\/\/drive\.google\.com\/drive\/folders\/.+$/',
            ],
            'status' => ['required', 'string', 'in:completed,pending,ongoing'],
            'category' => ['required'],
        ]);
        //    dd($request->all());


        try {
            DB::beginTransaction();

            // Handling image upload
            $attr = $request->except('_token');

            // Then handle the image upload if present
            if ($request->hasFile('image')) {
                $attr['image'] = $request->file('image')->store('project-photos', 'public');
            }

            // Add the user ID
            $attr['user_id'] = Auth::id();

            // Create the project
            Project::create($attr);

            DB::commit();
            return redirect('/super-admin/projects')->with('success', "Project created successfully.");
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Project creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create a project. Please try again.');
        }
    }


    public function edit(Project $project)
    {
        return view('superadmin.projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:250'],
            'subtitle' => ['nullable', 'string', 'max:250'],

            'start_date' => ['required', 'date'],
            'end_date' => ['nullable', 'date'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048', 'dimensions:width=1080,height=500', // At least 1080×500 (but not exact)
],
            'description' => ['required'],
            'achievements' => 'sometimes|array',
            'achievements.*' => 'string|max:255',
              'pdf_link' => [
                'nullable',
                'url', // Valid URL format
                'active_url', // Verify DNS record exists
                'starts_with:https://', // Force HTTPS
                'max:255', // Reasonable length limit
                // 'regex:/\.pdf$/i', // Ends with .pdf (case insensitive)
            ],
            'other_imgs' => [
                'nullable',
                'url',
                'starts_with:https://',
                'regex:/^https:\/\/drive\.google\.com\/drive\/folders\/.+$/',
            ],
            'status' => ['required', 'string', 'in:completed,pending,ongoing'],
            'category' => ['required'],
        ]);

        try {
            DB::beginTransaction();

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete previous image if it exists
                if ($project->image && Storage::disk('public')->exists($project->image)) {
                    Storage::disk('public')->delete($project->image);
                }
                // Store the new image
                $validatedData['image'] = $request->file('image')->store('project-photos', 'public');
            }

            // Convert achievements array to JSON (if needed)
            if (isset($validatedData['achievements'])) {
                $validatedData['achievements'] = json_encode($validatedData['achievements']);
            }

            // Update the project with ONLY validated data
            $project->update($validatedData);

            DB::commit();
            return redirect()->back()->with('success', 'Project updated!');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Project update error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update the project. Please try again.');
        }
    }

    public function trash(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('success', "The project have been moved to 'trash'!");;
    }

    public function trashed()
    {
       $trashedProjects = Project::with('user')->onlyTrashed()->latest()->paginate(10);

        return view('superadmin.projects.trashed', compact('trashedProjects'));
    }


   public function restore(Project $project)
{
    if (!$project->trashed()) {
       return redirect()->back()->with('success', "The project is not trashed");
    }

    $project->restore();

return redirect()->back()->with('success', "You have restored a project.");
}


  public function destroy(Project $project)
    {
        $project->forceDelete();
        return redirect()->back()->with('success', "The project have permanently deleted this project!");;
    }
}
