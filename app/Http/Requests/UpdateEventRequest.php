<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(!auth()->guard('web')->check()) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'image|max:5000',
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required' ,
            'description_ar' => 'required',
            'summary_en' => 'required',
            'summary_ar' => 'required',
            'start_date' => 'date|required',
            'end_date' => 'date|required'
        ];
    }
}
