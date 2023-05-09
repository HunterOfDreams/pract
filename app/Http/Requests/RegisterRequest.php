<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|unique:users,username',
            'surename' => 'required|unique:users,surename',
            'nationality' => 'required|unique:users,nationality',
            'sex' => 'required|unique:users,sex',
            'organisation' => 'required|unique:users,organisation',
            'position' => 'required|unique:users,position',
            'date' => 'required|unique:users,date',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
