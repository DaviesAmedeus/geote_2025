<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\SuperAdmin\Program\StoreProgramPostAction;
use App\Actions\SuperAdmin\Program\UpdateProgramPostAction;
use App\Http\Requests\SuperAdmin\Program\StoreProgramPostRequest;
use App\Http\Requests\SuperAdmin\Program\UpdateProgramPostRequest as UpdateRequest;

class ProgramController extends Controller
{
     public function fpts()
    {
        $programs = Post::with('author', 'subcategory')
            ->where('category_id', 2) // belongs to programs category
            ->where('subcategory_id', 5) //belongs to fpt subcategory
            ->latest()->paginate(10);

        return view('superadmin.programs.fpt', compact('programs'));

    }


     public function shortcourses()
    {
        $programs = Post::with('author', 'subcategory')
            ->where('category_id', 2) // belongs to programs category
            ->where('subcategory_id', 6) //belongs to shortcorses subcategory
            ->latest()->paginate(10);

        return view('superadmin.programs.shortcourses', compact('programs'));

    }


        public function show(Post $program)
    {


        return response()->json([

            'title'               => $program->title ?? 'No title',
            'program'             => $program->subcategory->name ?? 'No Category',
            'description'         => $program->excerpt ?? 'No Description available Available',
            'content'             => $program->content ?? 'No Content Available',
            'image'               => $program->cover_image ? "/storage/{$program->cover_image}" : null,
            'status'              => $program->status,
            'images_repository'   => $program->program_images ?? 'No Repository Link',
            'created_at'          => optional($program->created_at)->format('d M Y') ?? 'Not set',
            'updated_at'          => optional($program->updated_at)->format('d M Y') ?? 'Not set',

        ]);
    }


      public function create()
    {
        $programCategories = Subcategory::where('category_id',2)->get();
        return view('superadmin.programs.create', compact('programCategories'));
    }

      public function store(StoreProgramPostRequest $request, StoreProgramPostAction $storeProgramPostAction)
    {
        if (!$storeProgramPostAction->execute($request)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create program post. Please try again.');
        }

        return redirect()->back()->with('success', "Program Post created successfully. Create another!");
    }


     public function edit(Post $program)
    {


        $programCategories = Subcategory::where('category_id',2)->get();
        return view('superadmin.programs.edit', compact('program', 'programCategories'));
    }


    function update(UpdateRequest $request, Post $program, UpdateProgramPostAction $updateProgramPostAction)
    {

        if (!$updateProgramPostAction->execute($request, $program)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update a program post. Please try again.');
        }
        return redirect()->back()->with('success', 'Progran Post updated!');
    }

      public function trash(Post $program)
    {
        $program->delete();
        return redirect()->back()->with('success', "The Program Post have been moved to 'trash!'");;
    }



     public function trashedFpts()
    {
        $trashedPrograms = Post::with('author', 'subcategory')
           ->where('category_id', 2) // belongs to programs category
            ->where('subcategory_id', 5) //belongs to fpt subcategory
            ->onlyTrashed()->latest()->paginate(10);

        return view('superadmin.programs.trashedFpts', compact('trashedPrograms'));
    }

      public function trashedShortcourses()
    {
        $trashedPrograms = Post::with('author', 'subcategory')
             ->where('category_id', 2) // belongs to programs category
            ->where('subcategory_id', 6) //belongs to shortcorses subcategory
            ->onlyTrashed()->latest()->paginate(10);

        return view('superadmin.programs.trashedShortcourses', compact('trashedPrograms'));
    }

    public function restore(Post $program)
    {
        if (!$program->trashed()) {
            return redirect()->back()->with('success', "The program is not trashed");
        }
        $program->restore();
        return redirect()->back()->with('success', "You have restored a event.");
    }


    public function destroy(Post $program)
    {
        $program->forceDelete();
        return redirect()->back()->with('success', "The program post have been permanently deleted this event!");;
    }


}
