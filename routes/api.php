<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;

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

route::resource('book', BookController::class);

route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

//public route
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/Books/{id', [BookController::class, 'show']);
Route::get('/Author', [AuthorController::class, 'index']);
Route::get('/Author/{id', [AuthorController::class, 'show']);

//protected routes
route::middleware('auth:sanctum')->group(function (){
    Route::resource('books', BookController::class)->except('create', 'edit', 'show', 'index');
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('author', AuthorController::class)->except('create', 'edit', 'show', 'index');
});
