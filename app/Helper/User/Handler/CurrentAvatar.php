<?php
namespace App\Helper\User\Handler;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use TheSeer\Tokenizer\Exception;

class CurrentAvatar {

    public function make($objRequest) {
        $arrMixResult = [];
        try {
            if($objRequest) {
                $arrMixResult['success'] = true;
                $ids = explode(",",$objRequest->current_dressup); // array of ids
                $implodeIds = implode(',',array_fill(0, count($ids), '?')); 
                $data = Item::with('category')->whereIn('id', $ids)
                ->orderByRaw("field(id,{$implodeIds})", $ids)->get();
                $arrMixResult['data'] = [$data];
            } else {
                throw new Exception("No User Available");
            }
           
            
        } catch (\Exception $objException) {
            DB::rollback();
            $arrMixResult['success'] = false;
            $arrMixResult['errors'] = $objException->getMessage();
        }
        return $arrMixResult;
    }
}