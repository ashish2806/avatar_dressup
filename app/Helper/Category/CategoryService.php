<?php

namespace App\Helper\Category;



/**
 * Used for Authentication
 */
class CategoryService 
{
    protected $objRequest;
    /**
     * Update Password
     * @param  $objRequest
     * @param  $arrMixExtraData
     * @return object response
     */
    public function make()
    {
        return (new CategoryServiceManager())->make();
    }
}
