<?php

namespace App\Actions\SuperAdmin\Publication;

use App\Models\Publication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UpdatePublicationAction
{
    public function execute(Request $request, Publication $publication):bool
{
 // dd($request->all());
        try {
            DB::beginTransaction();

           $attr = $request->validated();


            // Then handle the image upload if present
            if ($request->hasFile('image')) {
                // Delete previous image if it exists
                if ($publication->image && Storage::disk('public')->exists($publication->image)) {
                    Storage::disk('public')->delete($publication->image);
                }


                $attr['image'] = $request->file('image')->store('publication-photos', 'public');
            }


            $publication->update($attr);
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('publication creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return false;
        }
}
}
