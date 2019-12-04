<?php


namespace App\Traits;


use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

trait FileTrait
{
    public static function getUploadedFileMeta($configs = [])
    {
        $fileMeta = array_merge([
            'field' => 'uploads',
            'folder' => isset($configs['folder']) ? $configs['folder'] : null,
            'is_temp'  => isset($configs['is_temp']) ? $configs['is_temp'] : false,
            'is_visible'  => isset($configs['is_visible']) ? $configs['is_visible'] : true,
        ], $configs);

        $file = request()->file($fileMeta['field']);

        $fileMeta['uuid'] = HelperTrait::uuid();
        $fileMeta['path'] = $file->getRealPath();
        $fileMeta['name'] = $file->getClientOriginalName();
        $fileMeta['extension'] = $file->getClientOriginalExtension();
        $fileMeta['size'] = $file->getSize();
        $fileMeta['mime'] = $file->getMimeType();

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