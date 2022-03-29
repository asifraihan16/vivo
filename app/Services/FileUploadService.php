<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Exception;

class FileUploadService
{
    public function upload($fileName, $path = '')
    {
        try {
            // return Storage::disk('s3')->put($path, request()->file($fileName));
            $path = request()->file($fileName)->store("{$path}", 's3');
            Storage::disk('s3')->setVisibility($path, 'public');
            return $path;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function uploadImage($fileName, $path = '')
    {
        try {
            $file = request()->file($fileName);
            $extension = $file->extension();

            // $name = Str::slug($file->getClientOriginalName()).'_'.time().'.'.$extension;
            // return request()->file($fileName)->storeAs("images/{$path}", 'public');
            return request()->file($fileName)->store("images/{$path}", 'public');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
