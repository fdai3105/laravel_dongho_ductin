<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class UserRequest extends FormRequest
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
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone_number' => 'required',
            'gender' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Tên người dùng không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã được đăng ký',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password ít nhất 8 kí tự',
            'phone_number.required' => 'Phone number không được để trống',
            'gender.required' => 'Giới tính không được để trống',
        ];
    }
}
