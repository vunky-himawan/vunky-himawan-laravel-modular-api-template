<?php

use App\Http\Controllers\Api\v1\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/v1/welcome', function (Request $request) {
    return response()->json([
        'message' => 'Welcome to the API',
        'statusCode' => 200,
    ]);
});

Route::prefix('v1')->group(function () {
    Route::get('/rooms', [RoomController::class, 'index'])
        ->name('rooms.index');
});
