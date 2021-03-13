<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingValidation extends FormRequest
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
        return[
            'fname'=>'required|min:3',
            'lname'=>'required|min:3',
            'address'=>'required|min:5',
            'email'=>'required|email|unique:tbl_shippings',
            'contact'=>'required|min:5|max:40'
        ];
    }
    public function messages()
    {
        return[
            'fname.required'=>'First Name is required',
            'fname.min'=>'First Name must be greater than Three',
            'lname.required'=>'Last Name is required',
            'lname.min'=>'Last Name must be greater than Three',
            'address.required'=>'Adress is required',
            'address.min'=>'Adress must be greater than Five',
            'email.required'=>'E-mail is required',
            'email.email'=>'Invalid E-mail',
            'email.unique'=>'This E-mail is already taken',
            'contact.required'=>'Contact is required',
            'contact.min'=>'Contact must be greater than Five',
            'contact.max'=>'Contact must be less than Fourty'
        ];
    }
}
