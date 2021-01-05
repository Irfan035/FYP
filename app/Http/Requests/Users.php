<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Users extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required','string','min:11', 'unique:users'],
            'cnic'=>['required','string','min:11', 'unique:users'],
            'role' => ['required', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'name is Required.',
            'email.required'  => 'email is Required.',
            'email.unique'  => 'email already exist.',
            'password.required'  => 'password is Required.',
            'password.min'  => '8 characters Required.',
            'phone.required'  => 'phone number is Required.',
            'phone.unique'  => 'phone number already exist.',
            'phone.min'  => '11 characters Required.',
            'cnic.required'  => 'cnic is Required.',
            'cnic.min'  => '16 characters Required.',
            'cnic.unique'  => 'cnic already exist.',
            'role.required'  => 'role is Required.',
        ];
    }
}
