<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermissions extends Model
{
    protected $table = 'user_permissions';

    protected $fillable = [
        'name', 'display_name'
    ];
}
