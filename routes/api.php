<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function(Request $request){
    return $request->user();
});

Route::get('storages', function(){
    return response()->json(\App\Storage::get());
});

Route::get('products', function(){
    return response()->json(\App\Models\Product::get());
});

Route::get('products/{id}', function($id){
    return response()->json(\App\Models\Product::find($id));
});

Route::get('products/category/{categoryId}', function($id){
    return response()->json(\App\Models\Product::where('category_id', $id)->get());
});

Route::get('products/storage/{storageId}', function($id){
    return response()->json(\App\Models\Product::where('storage_id', $id)->get());
});
