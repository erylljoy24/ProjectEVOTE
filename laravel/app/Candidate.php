<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //

    protected $fillable = [
        'name', 'course_id', 'position_id'
    ];
}
