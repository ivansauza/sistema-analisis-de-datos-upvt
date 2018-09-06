<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ProgramaUserExists implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        auth()->user()->programas()->findOrFail($value);

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Error, no tiene permisos sobre el programa enviado.';
    }
}