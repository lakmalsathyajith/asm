<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    //
    protected $fillable = ['primer_id', 'relate_name', 'relationship', 'relate_f_contact', 'relate_m_contact', 'relate_email', 'relate_address'];
}
