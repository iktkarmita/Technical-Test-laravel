<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\DataprovinsiController::class, 'index'])->name('dataprovinsi.index');

Route::get('/subscribe', [App\Http\Controllers\SubscribeController::class, 'index'])->name('subscribe.subscribe');

Route::post('/subscribe/store', [App\Http\Controllers\SubscribeController::class, 'create'])->name('subscribe.subscribe');

Auth::routes();
