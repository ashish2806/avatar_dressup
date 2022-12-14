<?php

namespace App\Contracts\Auth;

/**
 * Interface for Auth
 * @package Navnorth\Core\Helpers\Modules\Group\CreateGroup
 */

interface AuthContract
{
    /**
     * create Auth for Add
     * @param $objRequest
     * @param $arrMixExtraData - Optional
     * @return mixed
     */
    public function create($objRequest, $arrMixExtraData = []);
}