<?php

namespace App\Actions\SuperAdmin\Publication;

use App\Models\Publication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class StorePublicationAction
{
    public function execute(Request $request):bool
{
 // dd($request->all());
        try {
            DB::beginTransaction();

            $attr = $request->validated();

            $attr['slug'] = Str::slug($request->title.'-'.uniqid());
            $attr['reference_numbers'] = uniqid();
            $attr['status'] = 1; //2 is the category_id for programs
            $attr['author_id'] = Auth::user()->id;


            // dd($attr);

            // Then handle the image upload if present
            if ($request->hasFile('image')) {
                $attr['image'] = $request->file('image')->store('publication-photos', 'public');
            }

            Publication::create($attr);
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Publication creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return false;
        }
}
}
