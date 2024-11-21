<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/informacion', function (Request $request) {
    return $request->informacion();
})->middleware('auth:sanctum');



Route::get('/getUsers', [TestController::class, 'getUsers']);
Route::get('/getUser/{id}', [TestController::class, 'getUser']);
Route::post('/insertUser', [TestController::class, 'insertUser']);


Route::get('/getInformacion', [TestController::class, 'getInformacion']);
Route::get('/getInformacionID/{id}', [TestController::class, 'getInformacionID']);
Route::post('/insertInformacion', [TestController::class, 'insertInformacion']);