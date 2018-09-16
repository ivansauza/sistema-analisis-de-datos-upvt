<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PeriodoUnique;
use App\Rules\ProgramaUserExists;

class PeriodoRequest extends FormRequest
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
            'clave' => 'required|in:enero-abril,mayo-agosto,septiembre-diciembre', 
            'anio' => [ 
                'required', 
                'digits:4', 
                'integer', 
                'min:2007', 
                'max:' . (date("Y") + 1), 
                new PeriodoUnique($this->clave, $this->periodo)
            ], 
            'actual' => 'boolean|nullable', 
            'estado' => 'boolean|nullable', 
        ];
    }
}
