<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManufactureValidation extends FormRequest
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
            'manufacturename'=>'required|min:4',
            'manufacturedesc'=>'required|min:6',
            'pstatus'=>'required|min:5',
        ];
    }
        public function messages()
        {
            return[
            'manufacturename.required'=>'Manufacture field is required',
            'manufacturename.min'=>'Manufacture name must be greater than four',
            'manufacturedesc.required'=>'Manufacture description is required',
            'manufacturedesc.min'=>'Manufacture description must be greater than six',
            'pstatus.required'=>'Publication status is required',
            'pstatus.min'=>'Publication status must be greater than five'
            ];
        
    }
}
