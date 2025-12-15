<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});
Route::get('/views2', function () {
    return view('myviews2');
});

//Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
//Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process'])
