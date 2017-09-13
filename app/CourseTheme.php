<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTheme extends Model
{
    //
    protected $table = 'coursethemes';
    protected $fillable = [
        'courseid', 'name', 'summary','order'
    ];
}
