<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'email'       => 'required|string|email|max:255|unique:users,email,' . $this->user,
            'password'    => 'string|min:6|confirmed|nullable', 
            'programas'   => 'required|array', 
            'programas.*' => 'integer|exists:programas,id', 
            'roles'       => 'required|integer|exists:roles,id'
            /*'roles.*'     => 'integer|exists:roles,id'*/
        ];
    }
}
