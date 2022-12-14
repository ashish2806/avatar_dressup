<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([], function ($router) {
    Route::get('categories', [CategoryController::class, 'index' ]);
    Route::post('purchase-items', [UserController::class, 'purchaseItem']);
    Route::patch('user-dressup', [UserController::class, 'userDressUp']);
    Route::get('current-avatar-state/{user}', [UserController::class, 'currentAvatarState']);
});
