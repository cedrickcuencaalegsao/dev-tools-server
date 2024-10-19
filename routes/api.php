<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIController;

Route::get('/index', [APIController::class, 'index']);

//http://127.0.0.1:8000/api/tools
Route::get('/tools', [APIController::class, 'FindAll']);
Route::get('/get-tool/{id}', [APIController::class, 'getTool']);
Route::get('/search', [APIController::class, 'search']);

Route::get('/images/{filename}', function ($filename) {
    return response()->file(public_path('images/' . $filename));
});
