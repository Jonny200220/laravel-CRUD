<?php

use App\Http\Controllers\Users;
// use App\Models\User;
// use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', [Users::class, 'index'])->name('index');
Route::get('/create', [Users::class, 'create'])->name('create');
Route::post('/store', [Users::class, 'store'])->name('store');
Route::get('/show/{id}', [Users::class, 'show'])->name('show');
