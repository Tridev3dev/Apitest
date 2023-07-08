<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

//INSERT//
Route::Post('insert',[Apicontroller::class,'store']);

//RETRIVE DATA FROM DATABASE//  
Route::get('retrive',[Apicontroller::class,'index']);

//RETRIVE DATA FROM DATABASE (ID WISE)//
Route::get('retrive/{id}',[Apicontroller::class,'finddata']);

//UPDATE DATA FROM DATABASE (ID WISE)//
Route::put('updatedata/{id}',[Apicontroller::class,'update']);

//DELETE DATA FROM DATABASE (ID WISE)//
Route::delete('deledata/{id}',[Apicontroller::class,'destroy']);