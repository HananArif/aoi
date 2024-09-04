<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiresource('Products', ProductController::class);
Route::group(['prefix'=>'products'],function(){
Route::apiresource('/{Product}/reviews',ReviewController::class);
});

