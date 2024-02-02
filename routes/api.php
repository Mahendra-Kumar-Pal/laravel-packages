<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Controllers\ZoomMeetingController;

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

Route::get('users', [ApiController::class, 'index']);
Route::post('users', [ApiController::class, 'store']);
Route::get('singleUser/{id}', [ApiController::class, 'show']);
Route::post('update/{id}', [ApiController::class, 'update']);

Route::get('/', function () {
    return [
        'result' => true,
    ];
});

Route::get('/show/{id}', [ZoomMeetingController::class, 'show']);
Route::post('/store', [ZoomMeetingController::class, 'store']);
// Route::get('/meetings/{id}', [ZoomMeetingController::class, 'get'])->where('id', '[0-9]+');
Route::patch('/meetings/{id}', [ZoomMeetingController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/meetings/{id}', [ZoomMeetingController::class, 'destroy'])->where('id', '[0-9]+');
