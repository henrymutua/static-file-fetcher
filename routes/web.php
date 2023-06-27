<?php

use App\Http\Controllers\FileController;

Route::get('/files/{filename}', [FileController::class, 'fetch']);
