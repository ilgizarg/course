<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseMember extends Model
{
    //
    protected $table = 'coursemembers';
    protected $fillable = [
        'courseid', 'groupid','edustart','edustop'
    ];
}
