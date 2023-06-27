<?php

use App\Http\Controllers\FileController;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/files/{type}/{filename}', [FileController::class, 'fetch'])->name('fetch.file');
