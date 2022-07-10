<?php

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/show-movie/{id}', [MoviesController::class, 'show']);
Route::post('/store-movie', [MoviesController::class, 'store']);
Route::post('/update-movie/{id}', [MoviesController::class, 'update']);
Route::delete('/delete-movie/{id}', [MoviesController::class, 'delete']);
