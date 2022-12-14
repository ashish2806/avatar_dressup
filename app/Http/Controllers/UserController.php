<?php

namespace App\Http\Controllers;

use App\Contracts\Constants\User as UserConstant;
use App\Helper\User\UserService;
use App\Http\Requests\User\currentAvatarState;
use App\Http\Requests\User\PurchaseItem;
use App\Http\Requests\User\userDressUp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function purchaseItem(PurchaseItem $objRequest) {
        $arrMixData['action'] = UserConstant::PURCHASE_ITEM;
        $arrMixResult =  (new UserService())->make($objRequest, $arrMixData);
        return Response::json($arrMixResult,HttpResponse::HTTP_CREATED);
    }

    public function userDressUp(userDressUp $objRequest) {
        $arrMixData['action'] = UserConstant::DRESS_UP;
        $arrMixResult =  (new UserService())->make($objRequest, $arrMixData);
        return Response::json($arrMixResult,HttpResponse::HTTP_CREATED);
    }

    public function currentAvatarState(User $user) {
        $arrMixData['action'] = UserConstant::CURRENT_AVATAR;
        $arrMixResult =  (new UserService())->make($user, $arrMixData);
        return Response::json($arrMixResult,HttpResponse::HTTP_CREATED);
    }
}
