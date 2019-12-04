<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\FileInterface;
use App\Http\Controllers\Api\AbstractApiController;
use App\Http\Requests\File\StoreFileApiRequest;
use App\Traits\FileTrait;

class FileController extends AbstractApiController
{
    use FileTrait;


    function __construct(
        FileInterface $fileRepoInstance
    )
    {
        $this->activeRepo = $fileRepoInstance;
    }

    public function store(StoreFileApiRequest $request)
    {
        $data = $request->all();
        try {
            $meta = $this->getUploadedFileMeta($data);
            $uploaded = $this->uploadFile($meta);
            $record = $this->activeRepo->create($uploaded);
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'File uploaded successfully',
                $record,
                []
                ,200
            );
        } catch (\Exception $e) {
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'Error Occurred while creating the booking',
                $data,
                [$e->getMessage()]
                ,200
            );
        }
    }
}