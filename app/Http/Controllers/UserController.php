<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserupdateRequest;

use App\Programa;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UserController extends Controller
{
	use ProgramasEmptyValidate;

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		/**
		 * Extraer los usuarios que pertenecen al programa
		 * actual predeterminado excepto el administrador
		*/
		$users = Programa::getPredeterminado()->users()
			->where('users.id', '!=', auth()->user()->id )
			->get();
		return view('user.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$programas = auth()->user()->programas
			->pluck('nombre', 'id');
		$roles     = Role::get()->pluck('name', 'id');

		return view('user.create', compact('programas', 'roles'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(UserStoreRequest $request)
	{
		$user = User::create( $request->all() );
		$user->programas()
			->sync( $request->get('programas') );
		$user->roles()
			->sync( [$request->get('roles')[0]] );

		return redirect()->route('users.index')
			->with('info', ['type' => 'success', 'message' => 'Usuario agregado con éxito']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user)
	{
		return view('user.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user)
	{
		$programas = auth()->user()->programas
			->pluck('nombre', 'id');
		$roles     = Role::get()->pluck('name', 'id');

		return view('user.edit', compact('user', 'programas', 'roles'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(UserUpdateRequest $request, $id)
	{
		$user = User::findOrFail($id);
		$user->fill( $request->all() );
		$user->save();
		$user->programas()
			->sync( $request->get('programas') );
		$user->roles()
			->sync( [$request->get('roles')[0]] );

		return redirect()->route('users.edit', $user->id)
			->with('info', ['type' => 'success', 'message' => 'Usuario modificado con éxito']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
