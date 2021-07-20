<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PersonController;

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

Route::get('/building', [TestController::class, 'index']);
Route::get('/building/{room}', [TestController::class, 'room']);

Route::get('/person', [PersonController::class, 'index']);
Route::get('/add', [PersonController::class, 'add']);
Route::post('/add', [PersonController::class, 'create']);