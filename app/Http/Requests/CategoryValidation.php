<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'categoryname'=>'required|min:3',
            'categorydesc'=>'required|min:6',
            'pstatus'=>'required|min:5',
        ];
    }
        public function messages()
        {
            return[
                'categoryname.required'=>'Category name required',
                'categoryname.min'=>'Category name must be greater than three',
                'categorydesc.required'=>'Category description required',
                'categorydesc.min'=>'Category description must be greater than six',
                'pstatus.required'=>'Publication status required',
                'pstatus.min'=>'Publication status must be greater than five'
            ];
    }
}
