<?php

use App\Http\Controllers\Api\v1\RoomController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::resource('rooms', RoomController::class)
        ->only(['index', 'store']);
});
