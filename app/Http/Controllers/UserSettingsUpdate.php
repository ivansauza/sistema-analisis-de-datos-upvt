<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\UserCurrentPassword;

use App\User;

class UserSettingsUpdate extends Controller
{
    public function __invoke(Request $request)
    {
    	$data = $this->validator($request);
    	$user = User::findOrFail(auth()->id());
    	$user->fill($data);
    	$user->save();

    	return redirect()->route('settings.user')
            ->with('info', ['type' => 'success', 'message' => 'Los datos se actualizaron con éxito']);

    }

    public function validator(Request $request)
    {
    	$rules = [
            'current_password' => [
                'required', 
                'string', 
                'min:6', 
                new UserCurrentPassword
            ], 
            'prefijo'          => 'string|nullable', 
            'name'             => 'required|string|max:255',
            'apellidos'        => 'string|nullable', 
            'email'            => 'email|max:255|nullable',
            'password'         => 'string|min:6|confirmed|nullable'
    	];

    	return $request->validate($rules);
    }
}
