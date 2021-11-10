<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ServiceController ;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your Api!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('users')->group(function () {

    Route::get('/', [ServiceController::class, 'index']);

    Route::get('/{id}', [ServiceController::class, 'show']);

    Route::post('add', [UserController::class, 'store']);

    Route::put('edit/{id}', [ServiceController::class, 'update']);

    Route::get('search/{string}', [ServiceController::class, 'search']);

    Route::delete('delete/{id}', [ServiceController::class, 'destroy']);

});


Route::prefix('service')->group(function () {

    Route::get('/', [ServiceController::class, 'index']);

    Route::get('/{id}', [ServiceController::class, 'show']);

    Route::post('add', [ServiceController::class, 'store']);

    Route::put('edit/{id}', [ServiceController::class, 'update']);

    Route::get('search/{string}', [ServiceController::class, 'search']);

    Route::delete('delete/{id}', [ServiceController::class, 'destroy']);

});


Route::get('category', [CategoryController::class, 'all']);

Route::get('category/{id}', [CategoryController::class, 'category']);

Route::post('category/add', [CategoryController::class, 'add']);

Route::put('category/edit/{id}', [CategoryController::class, 'edit']);

Route::get('category/search/{string}', [CategoryController::class, 'search']);

Route::delete('category/delete/{id}', [CategoryController::class, 'delete']);



//sdfklnsdjk
