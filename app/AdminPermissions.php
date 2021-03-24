<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPermissions extends Model
{
    protected $table = 'admin_permissions';
    protected $primaryKey = 'guid';
    protected $fillable = [
        'name', 'display_name'
    ];
}
