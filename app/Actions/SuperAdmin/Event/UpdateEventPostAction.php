<?php

namespace App\Actions\SuperAdmin\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class UpdateEventPostAction
{
    public function execute(Request $request, Event $event)
    {
 try {
            DB::beginTransaction();

            $attr = $request->validated();
            $attr['event_category_id'] = $attr['category'];
            unset($attr['category']);
            // dd($attr);

            // Then handle the image upload if present
            if ($request->hasFile('image')) {
                // Delete previous image if it exists
                if ($event->image && Storage::disk('public')->exists($event->image)) {
                    Storage::disk('public')->delete($event->image);
                }


                $attr['image'] = $request->file('image')->store('eventpost-photos', 'public');
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
