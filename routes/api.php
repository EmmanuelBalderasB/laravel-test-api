<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/test', function () {
    return 'API is working';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api/v1
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
});

//Route::get('/api/v1/customers/', 'App\Http\Controllers\Api\V1\CustomerController@index');
//Route::get('/v1/customers/', [CustomerController::class, 'index']);