<?php

namespace App\Actions\SuperAdmin\Program;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;





class StoreProgramPostAction
{

public function execute(Request $request): bool
    {
        // dd($request->all());
        try {
            DB::beginTransaction();

            $attr = $request->validated();

            $attr['subcategory_id'] = $attr['subcategory'];
            unset($attr['subcategory']);
            $attr['slug'] = Str::slug($request->title.'-'.uniqid());
            $attr['category_id'] = 2; //2 is the category_id for programs
            $attr['author_id'] = Auth::user()->id;


            // dd($attr);

            // Then handle the image upload if present
            if ($request->hasFile('cover_image')) {
                $attr['cover_image'] = $request->file('cover_image')->store('eventpost-photos', 'public');
            }

            Post::create($attr);
            DB::commit();
            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Project creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return false;
        }
    }
}
