<?php

namespace App\Http\Controllers\Admin;

use App\Models\f;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Actions\SuperAdmin\Event\StoreEventPostAction;
use App\Actions\SuperAdmin\Event\UpdateEventPostAction;
use App\Http\Requests\SuperAdmin\Event\StoreEventPostRequest;
use App\Http\Requests\SuperAdmin\Event\UpdateEventPostRequest;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::with('eventCategory')->latest()->paginate(10);
        return view('superadmin.events.index', [
            'events' => $events
        ]);
    }

    public function create()
    {
        $eventCategories = EventCategory::where('status', 1)->get();
        return view('superadmin.events.create', [
            'eventCategories' => $eventCategories
        ]);
    }


    public function store(StoreEventPostRequest $request, StoreEventPostAction $storeEventPostAction)
    {
        if (!$storeEventPostAction->execute($request)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create an event post. Please try again.');
        }
        return redirect(route('superadmin.events.all'))->with('success', "Project created successfully.");
    }


    public function show(Event $event)
    {
        return response()->json([
            'title'        => $event->title ?? 'No title',
            'event'   => $event->eventCategory->name ?? 'No Category',
            'description'  => $event->description ?? 'No description Available',
            'image'        => $event->image ? "/storage/{$event->image}" : null,
            'status'       => $event->status ? 'Enabled (Can be viewed on the website)' : 'Disabled (Can not be viewed on the website)',
            'event_images'   => $event->event_images ?? 'No event images',
            'created_at'   => optional($event->created_at)->format('d M Y') ?? 'Not set',
            'updated_at'   => optional($event->updated_at)->format('d M Y') ?? 'Not set',

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $eventCategories = EventCategory::where('status', 1)->get();
        return view('superadmin.events.edit', [
            'event' => $event,
            'eventCategories' => $eventCategories
        ]);
    }

    function update(UpdateEventPostRequest $request, Event $event, UpdateEventPostAction $updateEventPostAction)
    {
        if (!$updateEventPostAction->execute($request, $event)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update an event post. Please try again.');
        }
        return redirect()->back()->with('success', 'Event Post updated!');
    }


     public function trash(Event $event)
    {
        $event->delete();
        return redirect()->back()->with('success', "The Event Post have been moved to 'trash'!");;
    }

    public function trashed()
    {
        $trashedEvents = Event::with('eventCategory')->onlyTrashed()->latest()->paginate(10);

        return view('superadmin.events.trashed', compact('trashedEvents'));
    }


    public function restore(Event $event)
    {
        if (!$event->trashed()) {
            return redirect()->back()->with('success', "The event is not trashed");
        }

        $event->restore();

        return redirect()->back()->with('success', "You have restored a event.");
    }


    public function destroy(Event $event)
    {
        $event->forceDelete();
        return redirect()->back()->with('success', "The event have permanently deleted this event!");;
    }
}
