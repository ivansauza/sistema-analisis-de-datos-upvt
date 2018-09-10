<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreguntaRequest extends FormRequest
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
            'nombre' => 'required|string|max:255', 
            'nota' => 'string|nullable', 
            'desactivar' => 'boolean|nullable', 
            'role_id' => 'required|integer|exists:roles,id', 
            'programa_id' => 'required|integer|exists:programas,id'
        ];
    }
}
