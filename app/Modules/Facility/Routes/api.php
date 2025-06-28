<?php

use App\Modules\Facility\Controllers\Api\v1\Room\RoomController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::resource('rooms', RoomController::class)
        ->only(['index', 'store']);
});
