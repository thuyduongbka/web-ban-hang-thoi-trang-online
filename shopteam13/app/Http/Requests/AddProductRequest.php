<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'image1.*' => 'mimes:jpg,jpeg,png,gif,bmp,JPG,PNG',
            'image2.*' => 'mimes:jpg,jpeg,png,gif,bmp,JPG,PNG',
            'image3.*' => 'mimes:jpg,jpeg,png,gif,bmp,JPG,PNG'
        ];
    }
    public function messages(){
         return [
            'image.mimes'=>'Định dạng ảnh sai'
        ];
       
    }
}
