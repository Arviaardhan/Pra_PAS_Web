<?php

use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/handphone.all', [HandphoneController::class, 'index']);
Route::get('/handphone/detail/{handphone}', [HandphoneController::class, 'show']);

Route::get('/laptop.all', [LaptopController::class, 'index']);
Route::get('/laptop/detail/{laptop}', [LaptopController::class, 'show']);
    