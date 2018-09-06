<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PeriodoUnique implements Rule
{
    protected $id;
    protected $clave;
    protected $programa_id;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($clave, $id, $programa_id)
    {
        $this->clave       = $clave;
        $this->id          = $id;
        $this->programa_id = $programa_id;
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
            ->where('programa_id', '=', $this->programa_id)
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
