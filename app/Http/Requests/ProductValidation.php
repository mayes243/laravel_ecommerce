<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidation extends FormRequest
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
            'productname'=>'required|min:5',
            'productsd'=>'required|max:100',
            'productld'=>'required|min:10',
            'productpr'=>'required|min:3',
            'image'=>'required|image',
            'productsize'=>'required|min:3',
            'productcolor'=>'required|min:4',
            'pstatus'=>'required|min:3',
            'productq'=>'required|min3'
        ];
    }
    public function messages()
    {
     return[
            'productname.required'=>'Product name is required',
            'productname.min'=>'Product name must be greater than Five',
            'productsd.required'=>'Product Short Description is required',
            'productsd.max'=>'Product Short Description must be less than One-hundred',
            'productld.required'=>'product Lond Description is required',
            'productld.min'=>'product Lond Description must be greater than Ten',
            'productpr.required'=>'Product Price is required',
            'productpr.min'=>'Product Price must be greater than Three',
            'image.required'=>'Image is required',
            'image.image'=>'Image only support png or jpg File only',
            'productsize.required'=>'Product size is required',
            'productsize.min'=>'Product must be greater than Three',
            'productcolor.required'=>'Product Size is required',
            'productcolor.min'=>'Product Size must be greater than Four',
            'pstatus.required'=>'Product Status is required',
            'pstatus.min'=>'Product Status must be greater than Three',
            'productq.required'=>'Product Quantity is required',
            'productq.min'=>'Product Quantity must be greater than Three',
        ];
    }
}
