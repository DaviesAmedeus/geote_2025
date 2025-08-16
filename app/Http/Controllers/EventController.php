<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
     public function mapathonsIndex()
    {
        $eventCategory = 2;
        $mapathons = Event::with('eventCategory')->where('status', 1)->where('event_category_id', $eventCategory)->latest()->paginate(4);
        return view('website.mapathons.index', compact('mapathons'));
    }

    public function mapathonsShow(Event $mapathon)
    {
        return view('website.mapathons.show', compact('mapathon'));
    }



       public function geosparksIndex()
    {
        $eventCategory = 1;
        $geosparks = Event::with('eventCategory')->where('status', 1)->where('event_category_id', $eventCategory)->latest()->paginate(4);
        return view('website.geosparks.index', compact('geosparks'));
    }

    public function geosparksShow(Event $geospark)
    {
        return view('website.geosparks.show', compact('geospark'));
    }


}
