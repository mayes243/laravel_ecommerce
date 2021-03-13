<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class paymentValidation extends FormRequest
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
            'pmethod'=>'required|min:3',
            'pstatus'=>'required|min:6'
        ];
    }
    public function messages()
    {
        return[
            'pmethod.required'=>'Payment Method is Required',
            'pmethod.min'=>'Payment Method must be greater than Three',
            'pstatus.required'=>'Payment Status is required',
            'pstatus.min'=>'Payment Status must be greater than Six',
        ];
    }
}
