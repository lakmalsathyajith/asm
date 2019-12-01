<?php


namespace App\Traits;


use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

trait FileTrait
{
    public static function getUploadedFileMeta($field = 'uploads')
    {
        $file = request()->file($field);

        $fileMeta['uuid'] = HelperTrait::uuid();
        $fileMeta['path'] = $file->getRealPath();
        $fileMeta['name'] = $file->getClientOriginalName();
        $fileMeta['extension'] = $file->getClientOriginalExtension();
        $fileMeta['size'] = $file->getSize();
        $fileMeta['mime'] = $file->getMimeType();
        $fileMeta['folder'] = null;

        return $fileMeta;
    }

    public static function uploadFile($meta)
    {
        $meta['user_id'] = Auth::id();
        $disk = 'public';
        $fileName = $meta['uuid'] . '.' . $meta['extension'];

        $relativePath = Storage::disk($disk)
            ->putFileAs($meta['folder'], new File($meta['path']), $fileName, 'public');
        $url = Storage::disk($disk)
            ->url($relativePath);

        $meta['url'] = $url;

        return $meta;
    }

    public function createThumb() {

    }
}