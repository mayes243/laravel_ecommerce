<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerValidation extends FormRequest
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
                    'fname'=>'required|min:4',
                    'lname'=>'required|min:4',
                    'email'=>'required|unique:tbl_customers',
                    'address'=>'required|min:5',
                    'contact'=>'required|min:7',
                    'gender'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'fname.required'=>'First Name Required',
            'fname.min'=>'First Name must be greater than Four',
            'lname.required'=>'Last name required',
            'lname.min'=>'Last Name must be greater than Four',
            'email.required'=>'E-mail Required',
            'email.unique'=>'This E-mail is already taken',
            'address.required'=>'Address required',
            'address.min'=>'Address must be greate than Five',
            'contact.required'=>'contact Required',
            'contact.min'=>'contact must be greater than Seven',
            'gender.required'=>'Gender Required',
        ];
    }
}
