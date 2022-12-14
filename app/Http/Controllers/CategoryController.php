<?php

namespace App\Http\Controllers;

use App\Helper\Category\CategoryService;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    public function index() {
        $arrMixResult =  (new CategoryService())->make();
        return Response::json($arrMixResult);
    }
}
