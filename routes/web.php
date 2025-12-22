<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/views2', function () {
    return view('myviews2');
});

Route::post('/form-submit', [FormController::class, 'submit'])
    ->name('form.submit');

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/flights', 'FlightController@index');
});
