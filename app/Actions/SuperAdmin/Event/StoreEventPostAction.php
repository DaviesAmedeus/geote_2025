<?php

namespace App\Actions\SuperAdmin\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class StoreEventPostAction
{
    public function execute(Request $request): bool
    {
        try {
            DB::beginTransaction();

            $attr = $request->validated();
            $attr['event_category_id'] = $attr['category'];
            unset($attr['category']);
            // dd($attr);

            // Then handle the image upload if present
            if ($request->hasFile('image')) {
                $attr['image'] = $request->file('image')->store('eventpost-photos', 'public');
            }

            Event::create($attr);
            DB::commit();
            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Project creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return false;
        }
    }
}
