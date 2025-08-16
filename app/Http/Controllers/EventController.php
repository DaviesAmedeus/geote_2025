<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
     public function mapathonsIndex()
    {
        $mapathonCategory = 2;
        $mapathons = Event::with('eventCategory')->where('status', 1) ->where('event_category_id', $mapathonCategory)->latest()->paginate(4);
        return view('website.mapathons.index', compact('mapathons'));
    }

    public function mapathonsShow(Event $mapathon)
    {

        // $otherEvents = Event::where('id', '!=', $project->id)->where('status', '!=', 'pending')->latest()->take(5)->get();

        return view('website.mapathons.show', compact('mapathon'));
    }
}
