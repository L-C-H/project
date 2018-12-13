<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPedit extends FormRequest
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
            //密码
            'password'=>'required|regex:/\w{8,16}/',
            //重复密码 same 校验两次密码是否一致
            'repassword'=>'required|regex:/\w{8,16}/|same:password'
        ];
    }

    public function messages(){
        return [
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码必须为8-16位任意的数字字母下划线',
            'repassword.regex'=>'确认密码必须为8-16位任意的数字字母下划线',
            'repassword.required'=>'重复密码不能为空',
            'repassword.same'=>'两次密码不一致'
            ];
    }
}
