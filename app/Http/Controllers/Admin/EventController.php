<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Actions\SuperAdmin\Event\StoreEventPostAction;
use App\Actions\SuperAdmin\Event\UpdateEventPostAction;
use App\Http\Requests\SuperAdmin\Event\StoreEventPostRequest;
use App\Http\Requests\SuperAdmin\Event\UpdateEventPostRequest;
use App\Models\Post;
use App\Models\Subcategory;


class EventController extends Controller
{


    public function geosparks()
    {
        $events = Post::with('author', 'subcategory')
            ->where('category_id', 1)
            ->where('subcategory_id', 2)
            ->latest()->paginate(10);

        return view('superadmin.events.geosparks', compact('events'));

        // NB: For now all events (Geospark & Mapathons) are viewed on the same page on admin panel. Later We will create a way to view each group separately
    }

      public function mapathons()
    {
        $events = Post::with('author', 'subcategory')
            ->where('category_id', 1)->where('subcategory_id', 1)
            ->latest()->paginate(10);

        return view('superadmin.events.mapathons', compact('events'));

        // NB: For now all events (Geospark & Mapathons) are viewed on the same page on admin panel. Later We will create a way to view each group separately
    }

    public function create()
    {
        $eventCategories = Subcategory::where('category_id',1)->get();
        return view('superadmin.events.create', compact('eventCategories'));
    }


    public function store(StoreEventPostRequest $request, StoreEventPostAction $storeEventPostAction)
    {
        if (!$storeEventPostAction->execute($request)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create an event post. Please try again.');
        }

        return redirect()->back()->with('success', "Event Post created successfully. Create another!");
    }


    public function show(Post $event)
    {
        return response()->json([
            'title'               => $event->title ?? 'No title',
            'event'               => $event->subcategory->name ?? 'No Category',
            'content'             => $event->content ?? 'No Content Available',
            'image'               => $event->cover_image ? "/storage/{$event->cover_image}" : null,
            'status'              => $event->status,
            'images_repository'   => $event->event_images ?? 'No Repository Link',
            'created_at'          => optional($event->created_at)->format('d M Y') ?? 'Not set',
            'updated_at'          => optional($event->updated_at)->format('d M Y') ?? 'Not set',

        ]);
    }


    public function edit(Post $event)
    {
        $eventCategories = Subcategory::where('category_id',1)->get();
        return view('superadmin.events.edit', compact('event', 'eventCategories'));
    }

    function update(UpdateEventPostRequest $request, Post $event, UpdateEventPostAction $updateEventPostAction)
    {
        if (!$updateEventPostAction->execute($request, $event)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update an event post. Please try again.');
        }
        return redirect()->back()->with('success', 'Event Post updated!');
    }


     public function trash(Post $event)
    {
        $event->delete();
        return redirect()->back()->with('success', "The Event Post have been moved to 'trash'!");;
    }

    public function trashedGeosparks()
    {
        $trashedEvents = Post::with('author', 'subcategory')
            ->where('category_id', 1)
            ->where('subcategory_id', 2)
            ->onlyTrashed()->latest()->paginate(10);

        return view('superadmin.events.trashedgeosparks', compact('trashedEvents'));
    }

      public function trashedMapathons()
    {
        $trashedEvents = Post::with('author', 'subcategory')
            ->where('category_id', 1)
            ->where('subcategory_id', 1)
            ->onlyTrashed()->latest()->paginate(10);

        return view('superadmin.events.trashedmapathons', compact('trashedEvents'));
    }



    public function restore(Post $event)
    {
        if (!$event->trashed()) {
            return redirect()->back()->with('success', "The event is not trashed");
        }
        $event->restore();
        return redirect()->back()->with('success', "You have restored a event.");
    }


    public function destroy(Post $event)
    {
        $event->forceDelete();
        return redirect()->back()->with('success', "The event have permanently deleted this event!");;
    }
}
