<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    //
    protected $fillable = [
        'child_f_name', 'child_l_name', 'child_dob', 'child_age', 'primer_id'
    ];



}
