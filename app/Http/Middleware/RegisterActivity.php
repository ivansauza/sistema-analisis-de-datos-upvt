<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Log;
use App\Actividad;
use Validator;

use Closure;

class RegisterActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = [
            'ruta'    => $request->route()->getName(), 
            'url'     => $request->fullUrl(), 
            'ip'      => $request->ip(), 
            'agente'  => $request->header('user-agent'), 
            'metodo'  => $request->method(), 
            'lugar'   => $request->header('accept-language'), 
            'user_id' => $request->user()->id, 
        ];

        $rules = [

        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            $errors = json_encode($validator->errors(), true);

            Log::error('Error al grabar el evento de actividad: '.$errors);
        } else {
            $actividad = Actividad::create($data);
        }

        return $next($request);
    }
}
