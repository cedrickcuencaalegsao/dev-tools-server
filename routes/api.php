<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIController;

Route::get('/index', [APIController::class, 'index']);

//http://127.0.0.1:8000/api/tools
Route::get('/tools', [APIController::class, 'FindAll']);

Route::get('/search', [APIController::class, 'search']);
