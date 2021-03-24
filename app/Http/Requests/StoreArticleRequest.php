<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'text_en' => 'required' ,
            'text_ar' => 'required'
        ];
    }
}
