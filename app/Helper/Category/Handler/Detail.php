<?php
namespace App\Helper\Category\Handler;

use App\Models\Category;

class Detail {
    public function __construct()
	{
        
    }

    public function make() {
        try {

            $objCategory = Category::with('items')->orderBy('position')->get();
            $arrMixResult['success'] = true;
            $arrMixResult['data'] = [];
            if($objCategory) {
                $arrMixResult['data'] = ['categories' => $objCategory];
            }
            
        } catch (\Exception $objException) {

            $arrMixResult['success'] = false;
            $arrMixResult['errors'] = $objException->getMessage();
            $arrMixResult['data'] = [];
        }
        return $arrMixResult;
    }
}