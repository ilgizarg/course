<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleAccess extends Model
{
    //
    protected $table = 'roleaccess';
    protected $fillable = [
        'roleid', 'accessid','status'
    ];
}
