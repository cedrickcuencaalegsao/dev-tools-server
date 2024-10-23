<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIController;

Route::get('/index', [APIController::class, 'index']);

//http://127.0.0.1:8000/api/tools
Route::get('/tools', [APIController::class, 'FindAll']);
Route::get('/get-tool/{id}', [APIController::class, 'getTool']);
Route::get('/search', [APIController::class, 'search']);
Route::get('/trending', [APIController::class, 'getTrending']);
Route::put('/tool/{id}/clickcount',[APIController::class,'updateClickCount']);
Route::get('/tools/getlatest',[APIController::class,'getLatest']);
Route::get('/tools/getoldest',[APIController::class,'getOldest']);
Route::get('/tools/getatoz',[APIController::class,'getAtoZ']);
Route::get('/tools/getztoa',[APIController::class,'getZtoA']);

Route::get('/images/{filename}', function ($filename) {
    return response()->file(public_path('images/' . $filename));
});
