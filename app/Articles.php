<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  mixed image
 */
class Articles extends Model
{
    protected $fillable = [
        'title_en', 'text_en', 'title_ar', 'text_ar', 'image'
    ];
}
