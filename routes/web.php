<?php

use App\Http\Controllers\ComparatorController;
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

Route::get('/how', function () {
    return view('how');
});

Route::get('/api', function () {
    return view('api');
});

Route::post('/get-result', [ComparatorController::class, 'getResult'])->name('getResult');
