<?php

namespace App\Http\Library\Files;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Exception;

class FileHandler{

    static public function handleFiles($file){
        $newFile = !is_array($file) ? [$file] : $file;
        $files = static::upload($newFile);
        !is_array($files) ? $files = json_encode([$file]) : $files = json_encode($files);
        return $files;
    }

    static private function upload($files){
        if(!is_array($files)){ throw new Exception("No files selected"); }

        for($i=0; $i < count($files); $i++) {
            $file = $files[$i];

            if(!file_exists($file)){
                throw new Exception("No files Selected");
            }

            $url = Cloudinary::uploadFile($file->getRealPath())->getSecurePath();
            $file_array[$i] = $url;
        }
        return $file_array;
    }

    static public function deleteFile($file){
        $files = is_array($file) ? $file : [$file];

        foreach ($files as $file) {
            $cloudinary_id = static::extractFileId($file);
            Cloudinary::destroy($cloudinary_id);
        }
    }

    static private function extractFileId($file){
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        return basename($file, $ext);
    }
}
