<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function fetch($filename)
    {
        $path = storage_path('app/public/' . $filename);

        if (Storage::exists($filename)) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }
}
