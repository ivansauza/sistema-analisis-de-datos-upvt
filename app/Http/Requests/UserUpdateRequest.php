<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Rules\ProgramaUserExists;

class UserUpdateRequest extends FormRequest
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
            'name'        => 'required|string|max:255',
            'apellidos'   => 'string|nullable', 
            'email'       => 'string|email|max:255|nullable',
            'username'    => 'required|alpha_dash|max:25|unique:users,username,' . $this->user,
            'password'    => 'string|min:6|confirmed|nullable', 
            'programas'   => 'required|array', 
            'programas.*' => [
                'integer', 
                new ProgramaUserExists
            ], 
            'roles'       => 'required|integer|exists:roles,id'
        ];
    }
}
