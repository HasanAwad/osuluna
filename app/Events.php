<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  mixed image
 */
class Events extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_en', 'description_en', 'summary_en','start_date','end_date','title_ar', 'description_ar','summary_ar', 'image'
    ];


}
