<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Exception;
use Image;

class FileUploadService
{
    public function upload($fileName, $path = '')
    {
        try {
            // return Storage::disk('s3')->put($path, request()->file($fileName));
            $upl_path = request()->file($fileName)->store("{$path}", 's3');
            Storage::disk('s3')->setVisibility($upl_path, 'public');
            return $upl_path;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function resizeUpload($fileName, $width, $height, $path = '', $thumbnail = false)
    {
        try {
            $file = request()->file($fileName);
            $extension = $file->getClientOriginalExtension();
            $hashedName = $file->hashName();
            $filePath = "$path/" . $hashedName;
            if ($thumbnail) {
                $filePath = "$path/thumb_" . $hashedName;
            }

            $img = Image::make($file)
                ->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->encode($extension);

            Storage::disk('s3')->put($filePath, $img->stream(), 'public');
            return $filePath;
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
