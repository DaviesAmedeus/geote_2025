<?php

namespace App\Actions\SuperAdmin\EventCategory;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class StoreEventCategoryAction {


    public function execute(Request $request) : bool{

        try{
            DB::beginTransaction();

            $attr = $request->validated();
            // We add additional atrributes by default
            $attr['category_id'] = 1;
            $attr['slug'] = Str::slug($request->name.'-'.uniqid());
            Subcategory::create($attr);
            DB::commit();
            return true;
        }catch(\Throwable $th){
             DB::rollBack();
            Log::error('EventCategory creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return false;

        }
    }

}
