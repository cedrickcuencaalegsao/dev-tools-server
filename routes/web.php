<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/server/dashboard', [WebController::class, 'viewDashBoard']);
Route::get('/server/addtools', [WebController::class, 'viewAddTool']);
Route::get('/server/updatetool/{id}', [WebController::class, 'viewAddTool']);
