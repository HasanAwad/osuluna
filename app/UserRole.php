<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserRole extends Model
{
    protected $table = 'admin_roles';

    protected $fillable = [
        'name', 'display_name'
    ];

    /**
     * @return BelongsToMany
     */
    public function permissions() {
        return $this->belongsToMany(UserPermissions::class, 'user_roles_permissions', 'role_id', 'permission_id');
    }
}
