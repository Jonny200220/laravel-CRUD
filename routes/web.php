<?php

use App\Http\Controllers\Users;
// use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', [Users::class, 'index'])->name('index');
Route::get('/create', [Users::class, 'create'])->name('create');
Route::post('/store', [Users::class, 'store'])->name('store');