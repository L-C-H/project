<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminMemberadd extends FormRequest
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
            //用户名不能为空规则设置 required 输入的数据不能为空
            'username'=>'required|regex:/\w{4,12}/|unique:member',
            //电话规则
            'phone'=>'required|regex:/\w{11}/|unique:member',
            //email 规则 校验数据是否符合邮箱格式
            'email'=>'required|email',
            //密码
            'password'=>'required|regex:/\w{8,16}/',
        ];
    }
    //自定义错误提示信息
    public function messages(){
        return[
            'username.required'=>'用户名不能为空',
            'username.regex'=>'用户名必须为4-12位数字字母下划线',
            'username.unique'=>'用户名重复',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱不符合要求',
            'phone.required'=>'电话不能为空',
            'phone.unique'=>'号码已被使用',
            'phone.regex'=>'电话必须为11位数字',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码必须为8-16位任意的数字字母下划线',
            ];
        }
}
