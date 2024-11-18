<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopifyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::controller(ShopifyController::class)->prefix('shopify')->group(function () {
   /* Route::post('', 'store');
    Route::put('{id}', 'update');
    Route::delete('{id}', 'remove');
    Route::post('import-csv', 'importCsv');*/
    Route::get('', 'index');
    Route::get('/test', 'test');
    Route::get('/getPaidAndFulfilledOrders', 'getPaidAndFulfilledOrders');
    Route::get('/facturar', 'GenerarFactura');

});