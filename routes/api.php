<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/v1/welcome', function (Request $request) {
    return response()->json([
        'message' => 'Welcome to the API',
        'statusCode' => 200,
    ]);
});
