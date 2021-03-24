<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AdminRole extends Model
{
    protected $table = 'admin_roles';
    protected $primaryKey = 'guid';
    protected $fillable = [
        'name', 'display_name'
    ];

    /**
     * @return BelongsToMany
     */
    public function permissions() {
        return $this->belongsToMany(AdminPermissions::class, 'admin_roles_permissions', 'role_id', 'permission_id');
    }
}
