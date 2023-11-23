<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HwController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/sport/{title}/{id}', [HwController::class,'sport'])->where([
    'title' => '[a-z]+',
    'id' => '[0-9]+'
]);

Route::get('/economyValue/{title}/{id}', [HwController::class,'economyValues'])->where([
    'title' => '[a-z]+',
    'id' => '[0-9]+'
]);

