<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Programa;

class PeriodoUnique implements Rule
{
    protected $id;
    protected $clave;
    protected $programa_id;

    /**
     * Create a new rule instance.
     * @param  string  $clave
     * @param  integer  $id
     * @return void
     */
    public function __construct($clave, $id)
    {
        $this->clave       = $clave;
        $this->id          = $id;
        $this->programa_id = Programa::getPredeterminado()->id;
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
        /**
         * Determinar si el periodo enviado ya esta en la bd
         */
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
