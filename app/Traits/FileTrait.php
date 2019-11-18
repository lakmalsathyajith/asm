<?php


namespace App\Traits;


trait FileTrait
{
    public static function getUploadedFileMeta($field = 'uploads')
    {
        $file = request()->file($field);
        $prefix = strtolower(env('APP_NAME', 'salt')).'_';

        $fileMeta['uuid'] = uniqid($prefix);
        $fileMeta['path'] = $file->getRealPath();
        $fileMeta['name'] = $file->getClientOriginalName();
        $fileMeta['extension'] = $file->getClientOriginalExtension();
        $fileMeta['size'] = $file->getSize();
        $fileMeta['mime'] = $file->getMimeType();

        return $fileMeta;
    }

    public function createThumb() {

    }
}