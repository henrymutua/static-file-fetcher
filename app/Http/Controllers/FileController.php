<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function fetch($type, $filename)
    {
        $folder = $this->getFolder($type);
        $path = storage_path("app/public/files/{$folder}/{$filename}");

        if (Storage::exists("public/files/{$folder}/{$filename}")) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }

    private function getFolder($type)
    {
        $folders = [
            'images' => 'images',
            'videos' => 'videos',
            'docs' => 'docs',
            'audio' => 'audio',
        ];

        return $folders[$type] ?? '';
    }
}
