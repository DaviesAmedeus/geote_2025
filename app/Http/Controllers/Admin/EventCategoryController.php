<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\SuperAdmin\EventCategory\StoreEventCategoryAction;
use App\Actions\SuperAdmin\EventCategory\UpdateEventCategoryAction;
use App\Http\Requests\SuperAdmin\EventCategory\StoreEventCategoryRequest;

class EventCategoryController extends Controller
{
    public function index()
    {
        $pageTitle =  'Create Project';
        $eventCategories = Subcategory::with('category')->where('category_id', 1)->latest()->paginate();
        // dd($eventCategories);
        return view('superadmin.events.categories', compact('eventCategories', 'pageTitle'));

        // NB: For now all events (Geospark & Mapathons) are viewed on the same page on admin panel. Later We will create a way to view each group separately
    }


    public function store(StoreEventCategoryRequest $request, StoreEventCategoryAction $storeEventCategoryAction)
    {
        if (!$storeEventCategoryAction->execute($request)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create Event Category. Please try again!');
        }
        return redirect(route('superadmin.events.categories'))->with('success', "Event Category created successfully.");
    }


    public function show(Subcategory $category)
    {
        return response()->json([
            'name'        => $category->name ?? 'NULL',
            'slug'     => $category->slug ?? 'NULL',
            'description'     => $category->description ?? 'NULL',
            'created_at'     => $category->created_at ?? 'NULL',
            'updated_at'     => $category->updated_at ?? 'NULL',
        ]);
    }


       public function update(StoreEventCategoryRequest $request, Subcategory $category, UpdateEventCategoryAction $updateEventCategoryAction)
    {
        if (!$updateEventCategoryAction->execute($request, $category)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create Event Category. Please try again!');
        }
        return redirect(route('superadmin.events.categories'))->with('success', "Event Category created successfully.");

    }


    public function destroy(Subcategory $category)
    {
        $category->delete();
        return redirect()->back()->with('success', "The Category have been deleted Permanently!");;
    }
}
