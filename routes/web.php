<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/api/documentation');
});

Route::get('/api/documentation', function () {
    $urlsToDocs = [
        'default' => route('l5-swagger.default.docs'),
    ];
    if (config('l5-swagger.documentations')) {
        $documentation = config('l5-swagger.documentations')[0]['name'] ?? 'default';
        $documentationTitle = config('l5-swagger.documentations')['default']['api']['title'] ?? 'API Documentation';
        $useAbsolutePath = config('l5-swagger.documentations')[0]['use_absolute_path'] ?? false;
    }

    return view('vendor.l5-swagger.index', compact('urlsToDocs', 'documentation', 'documentationTitle', 'useAbsolutePath'));
});
