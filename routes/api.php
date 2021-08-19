<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('publisher',\App\Http\Controllers\Publisher\PublisherController::class)->except(['edit','create','store']);
Route::apiResource('users',\App\Http\Controllers\User\UserController::class)->except(['edit','create']);
Route::apiResource('mangas',\App\Http\Controllers\Manga\MangaController::class)->except(['edit','create']);
Route::apiResource('products',\App\Http\Controllers\ProductController::class)->only(['index']);
