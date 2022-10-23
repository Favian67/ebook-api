<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haloController;
use App\Http\Controllers\SiswaController;


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

// url : http://127.0.0.1:8000/api/halo

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('halo', function(){
   $data = ["me" => "ganteng"];

   return $data;
});

// url : http://127.0.0.1:8000/api/haloController

route::resource('hellocontroller', haloController::class);

route::resource('siswa', SiswaController::class);
