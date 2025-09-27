<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function fpt(){
        $fpts =Post::with('author', 'subcategory')
            ->where('category_id', 2) // 2 - programs
            ->where('subcategory_id', 5) //5- fpt
            ->latest()->paginate(4);

        return view('website.fpt.index', compact('fpts'));
    }


     public function fptShow(Post $fpt)
    {
        return view('website.fpt.show', compact('fpt'));
    }







     public function shortcourses(){
         $shortcourses=Post::with('author', 'subcategory')
            ->where('category_id', 2) // 2 - programs
            ->where('subcategory_id', 6) //6- short-courses
            ->latest()->paginate(4);

        return view('website.shortcourses.index', compact('shortcourses'));
    }


     public function shortcourseShow(Post $shortcourse)
    {
        return view('website.shortcourses.show', compact('shortcourse'));
    }

}
