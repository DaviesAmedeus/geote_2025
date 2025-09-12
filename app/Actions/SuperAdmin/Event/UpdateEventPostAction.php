<?php

namespace App\Actions\SuperAdmin\Event;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class UpdateEventPostAction
{
    public function execute(Request $request, Post $event)
    {
 try {
            DB::beginTransaction();

            $attr = $request->validated();
            $attr['subcategory_id'] = $attr['subcategory'];
            unset($attr['subcategory']);
            // dd($attr);

            // Then handle the image upload if present
            if ($request->hasFile('cover_image')) {
                // Delete previous image if it exists
                if ($event->image && Storage::disk('public')->exists($event->cover_image)) {
                    Storage::disk('public')->delete($event->cover_image);
                }


                $attr['cover_image'] = $request->file('cover_image')->store('eventpost-photos', 'public');
            }

            $event->update($attr);
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('event creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return false;
        }
    }
}
