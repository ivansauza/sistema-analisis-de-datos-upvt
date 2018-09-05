<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PeriodoUnique implements Rule
{
    protected $id;
    protected $clave;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($clave, $id)
    {
        $this->clave = $clave;
        $this->id    = $id;
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
        $count = \DB::table('periodos')
            ->where('id', '!=', $this->id)
            ->where('anio', '=', $value)
            ->where('clave', '=', $this->clave)
            ->count();

         return $count === 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Este periodo ya se encuentra en la base de datos.';
    }
}
