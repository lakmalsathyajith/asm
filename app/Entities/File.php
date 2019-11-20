<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'name',
        'extension',
        'size',
        'mime',
        'url',
        'user_id'
    ];

    public function hasRelationship()
    {
        $count = File::where('files.id', $this->id)
            ->join('fileables', 'files.id', '=', 'fileables.file_id')
            ->count();

         return ($count > 0);
    }
}
