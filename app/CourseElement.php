<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseElement extends Model
{
    //
    protected $table = 'courseelements';
    protected $fillable = [
        'themeid', 'elementid','elementinitid','grade','order'
    ];
}
