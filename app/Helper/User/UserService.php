<?php

namespace App\Helper\User;

class UserService 
{
    protected $objRequest;
    /**
     * Update Password
     * @param  $objRequest
     * @param  $arrMixExtraData
     * @return object response
     */
    public function make($objRequest, $arrMixExtraData = [])
    {
        return (new UserServiceManager($arrMixExtraData['action']))->make($objRequest);
    }
}
