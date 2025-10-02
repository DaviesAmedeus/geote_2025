<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
   public function index(){
    $publications = Publication::with('user')->latest()->paginate(6);

    return view('website.publications.index', compact('publications'));
   }


     public function show(Publication $publication){


    return view('website.publications.show', compact('publication'));
   }
}
