<?php

namespace App\Http\Controllers\Admin;

use App\Actions\SuperAdmin\Publication\StorePublicationAction;
use App\Actions\SuperAdmin\Publication\UpdatePublicationAction;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\Publication\StorePublicationRequest;
use App\Http\Requests\SuperAdmin\Publication\UpdatePublicationRequest;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::with('user')->latest()->paginate(10);

        return view('superadmin.publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.publications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicationRequest $request, StorePublicationAction $storePublication)
    {
            if(!$storePublication->execute($request)){
                 return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create the Publication. Please try again.');

            }

                    return redirect('/super-admin/publications')->with('success', "Publication created successfully. Create another!");


    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
       return response()->json([
            'title'        => $publication->title ?? 'No title',
            'overview'  => $publication->overview ?? 'No overview',
            'authors' => $publication->authors ?: [],
            'image'        => $publication->image ? "/storage/{$publication->image}" : null,
            'status'       => $publication->status ?? 'No Status',
            'publication_link'     => $publication->publication_link ?? 'No publication_link',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
                return view('superadmin.publications.edit', compact('publication'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicationRequest $request, UpdatePublicationAction $updatePublication, Publication $publication)
    {
        if(!$updatePublication->execute($request, $publication)){
                 return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Failed to Update the Publication. Please try again.');

            }

                    return redirect()->back()->with('success', "Publication created successfully. Create another!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
                return redirect()->back()->with('success', "The Publication successfully deleted!");;

    }
}
