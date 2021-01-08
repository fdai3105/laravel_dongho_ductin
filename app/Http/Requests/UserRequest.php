<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

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
            'gender' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Name must be required',
            'email.required' => 'Email must be required',
            'email.email' => 'Email not correct type',
            'email.unique' => 'Email is already create',
            'password.required' => 'Password must be required',
            'password.min' => 'Password min is 8',
            'phone_number.required' => 'Phone number must be required',
            'gender.required' => 'Gender must be required',
            'gender.boolean' => 'Gender not correct type',
        ];
    }
}
