<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            'email'=>'required|email|unique:customer,email,'.$this->segment(3).',id',            
            'name'=>'required',
            'address'=>'required'
        ];
    }
    public function messages(){
         return [
            'email.required'=>'nhập lại email đi',
            'email.email'=>'Không đúng đin',
            'email.unique'=>'đã có ng sử dụng',
            'name.required'=>'điền tên vào đi'
        ];
       
    }
}
