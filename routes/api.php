<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

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

// 请求地址则为 http://域名/api/verifyUser
Route::post('/verifyUser', 'Api\LoginController@verifyUser');

// 请求地址则为 http://域名/api/getList
Route::get('/getList', [Api\ArticleController::class, 'getList']);

// 请求地址则为 http://域名/api/getDetail/xxx
Route::get('/getDetail/{id}', [Api\ArticleController::class, 'getDetail']);

// 请求地址则为 http://域名/api/getRoomInfo/xx
Route::get('/getRoomInfo/{id}', [Api\UserController::class, 'getRoomInfo']);