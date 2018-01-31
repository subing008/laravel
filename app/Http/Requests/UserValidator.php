<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidator extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6',
        ];
    }

    public function messages() {
        return [
            'name.required' => '用户名不能为空',
            'name.max' => '用户名不能超过50个字符',
            'email.required' => '邮箱不能为空',
            'email.max' => '用户名不能超过255个字符',
            'email.email' => '邮箱格式不正确',
            'email.unique' => '邮箱已存在',
            'password.required' => '密码不能为空',
            'password.min' => '密码长度不能小于6个字符',
            'password.confirmed' => '两次密码输入不一致',

        ];
    }
}
