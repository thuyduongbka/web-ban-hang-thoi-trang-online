<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSigninRequest extends FormRequest
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
            'email'=>'required|email|unique:customer,email',
            'password'=>'required|min:6|max:20',
            'name'=>'required',
            'address'=>'required',
            're_password'=>'required|same:password'
        ];
    }
    public function messages(){
         return [
            'email.required'=>'nhập lại email đi',
            'email.email'=>'Không đúng đin',
            'email.unique'=>'đã có ng sử dụng',
            'password.required'=>'nhập lại đi',
            're_password.same'=>'nhập lại bị sai rồi',
            'password.min'=>'nhập trên 6 kí tự',
            'password.max'=>'nhập dưới 20 kí tự thôi',
            'name.required'=>'điền tên vào đi'
        ];
       
    }
}
