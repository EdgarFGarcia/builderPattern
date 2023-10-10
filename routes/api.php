<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'unauth'], function(){
    
    Route::get('/test/{data?}', [App\Http\Controllers\API\User\CUser::class, 'getRecords']);
    Route::get('/start', [App\Http\Controllers\API\Test\CTest::class, 'start']);

});