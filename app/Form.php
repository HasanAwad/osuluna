<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Form extends Model
{
    protected $fillable = [
        'family_business_name', 'applicant_full_name', 'industry_id', 'business_sector_id', 'business_generation_id',
        'business_legal_form_id', 'business_year_establishment', 'nb_family_members', 'nb_of_business_owner',
        'phone_number', 'full_address', 'email','applicant_role'
    ];

    /**
     * @return BelongsTo
     */
    public function industry()
    {
        return $this->belongsTo(TypeOfIndustry::class,'industry_id');
    }

    /**
     * @return BelongsTo
     */
    public function bSectore()
    {
        return $this->belongsTo(BusinessSector::class,'industry_id');
    }

    /**
     * @return BelongsTo
     */
    public function bGeneration()
    {
        return $this->belongsTo(BusinessGeneration::class,'business_generation_id');
    }

    /**
     * @return BelongsTo
     */
    public function legalForm()
    {
        return $this->belongsTo(BusinessLegalForm::class,'business_legal_form_id');
    }

    /**
     * @return BelongsTo
     */
    public function appRole()
    {
        return $this->belongsTo(BusinessLegalForm::class,'business_legal_form_id');
    }
}
