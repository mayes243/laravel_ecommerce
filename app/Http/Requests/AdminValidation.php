<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminValidation extends FormRequest
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
            'fname'=>'required|min:3|alpha',
            'lname'=>'required|min:3|alpha',
            'username'=>'required|min:5|string',
            'address'=>'required|min:4|string',
            'email'=>'required|email|unique:users',
            'contact'=>'required|min:5',
            'gender'=>'required',
            'image'=>'image',
            'password'=>'required|min:5',
            'password_confirmation'=>'confirmed'
        ];
    }
    public function messages()
    {
        return[
            'fname.required'=>'First name is required',
            'fname.min'=>'First name must be greater than three',
            'fname.alpha'=>'First name only contain alphabet',
            'lname.required'=>'Last name required',
            'lname.min'=>'Last name must be greater than three',
            'lname.alpha'=>'Last name only contains alphabet',
            'username.required'=>'Username is required',
            'username.min'=>'Username must be greater than five',
            'username.alpha'=>'Username only contain alphabet',
            'email.required'=>'Email is required',
            'email.email'=>'Invalid e-mail address',
            'email.unique'=>'This email is already taken',
            'contact.required'=>'Contact number is required',
            'contact.min'=>'Contact number must be greater than five',
            'gender'=>'Gender required',
            'image.image'=>'Image support only jpg or png file',
            'password.required'=>'Password is required',
            'password.min'=>'Password must be greater than five character'
        ];
    }
}
