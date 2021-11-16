<?php

use App\Http\Controllers\FurnitureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/furniture',[FurnitureController::class, 'findAll']);
Route::get('/furniture/search',[FurnitureController::class, 'formSearch']);
Route::post('/furniture/search',[FurnitureController::class, 'search']);
