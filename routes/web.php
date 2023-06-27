<?php

use App\Http\Controllers\FileController;

Route::get('/files/{type}/{filename}', [FileController::class, 'fetch'])->name('fetch.file');
