<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    //
    protected $table = 'groupmembers';
    protected $fillable = [
        'groupid', 'userid','roleid'
    ];
}
