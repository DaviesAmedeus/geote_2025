<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
     public function mapathonsIndex()
    {
        $mapathons = Post::with('author', 'subcategory')
            ->where('category_id', 1)->where('subcategory_id', 1)
            ->latest()->paginate(4);

        return view('website.mapathons.index', compact('mapathons'));
    }

    public function mapathonsShow(Post $mapathon)
    {
        return view('website.mapathons.show', compact('mapathon'));
    }



       public function geosparksIndex()
    {
            $geosparks = Post::with('author', 'subcategory')
            ->where('category_id', 1)
            ->where('subcategory_id', 2)
            ->latest()->paginate(4);

        return view('website.geosparks.index', compact('geosparks'));
    }

    public function geosparksShow(Post $geospark)
    {
        return view('website.geosparks.show', compact('geospark'));
    }


}
