<?php
namespace App\Helper\User\Handler;


use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use TheSeer\Tokenizer\Exception;


class PurchaseItem {

    public function make($objRequest) {
        $arrMixResult = [];
        try {
            
            $objUser = User::find($objRequest->user_id);
            $objItem = Item::find($objRequest->item_id);
            if($objUser && $objItem) {
                if($objUser->balance > $objItem->price) {
                    DB::beginTransaction();
                    $objUser->items()->attach($objRequest->item_id);
                    $objUser->balance = $objUser->balance - $objItem->price;
                    $objUser->save();
                    DB::commit();
                    $arrMixResult['success'] = true;
                    $arrMixResult['message'] ="Purchase Successfully";
                    $arrMixResult['data'] = [];
                } else {
                    $arrMixResult['success'] = false;
                    $arrMixResult['errors'] = 'Not Enough Balance';
                }
            } else {
                throw new Exception("Something went wrong");
            }
            
        } catch (\Exception $objException) {
            DB::rollback();
            $arrMixResult['success'] = false;
            $arrMixResult['errors'] = $objException->getMessage();
        }
        return $arrMixResult;
    }
}