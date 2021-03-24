<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediationCenter extends Model
{
    protected $fillable = [
        'full_name', 'email', 'phone', 'country', 'city', 'subject', 'case_description'
    ];
}
