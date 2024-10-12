<?php

use App\Http\Controllers\API_controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/index', [API_controller::class, 'index']);

//http://127.0.0.1:8000/api/tools
Route::get('/tools', [API_controller::class, 'FindAll']);
