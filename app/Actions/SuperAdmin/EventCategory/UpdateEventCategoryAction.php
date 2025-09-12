<?php

namespace App\Actions\SuperAdmin\EventCategory;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class UpdateEventCategoryAction {


    public function execute(Request $request, Subcategory $category) : bool{


        try{
            DB::beginTransaction();

            $attr =$request->validated();
            $category->update($attr);



            DB::commit();
            return true;
        }catch(\Throwable $th){
             DB::rollBack();
            Log::error('EventCategory creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return false;

        }
    }

}
