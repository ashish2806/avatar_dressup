<?php
namespace App\Helper\User\Handler;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use TheSeer\Tokenizer\Exception;

class DressUp {

    public function make($objRequest) {
        $arrMixResult = [];
        try {
            
            $objUser = User::find($objRequest->user_id);
            if($objUser) {
                $userPurchaseItems = $objUser->items->pluck('id')->toArray();
                $requestItems = array_map('intval', explode(',', $objRequest->item_ids));
                $accessibleItems = array_intersect($requestItems, $userPurchaseItems);
                $objUser->current_dressup = implode(",", $accessibleItems);
                DB::beginTransaction();
                $objUser->save();
                DB::commit();
                $arrMixResult['success'] = true;
                $arrMixResult['message'] ="DressUp Updated Successfully";
                $arrMixResult['data'] = [$objUser->items];
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