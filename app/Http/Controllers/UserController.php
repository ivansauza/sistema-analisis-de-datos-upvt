<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserupdateRequest;

use App\Programa;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Actividad;

class UserController extends Controller
{
    public function __construct()
    {
        /**
         * Asignando permisos a los métodos
         */
        $this->middleware('permission:users.index')
            ->only(['index']);

        $this->middleware('permission:users.create')
            ->only(['create', 'store']);

        $this->middleware('permission:users.show')
            ->only(['show', 'actividades']);

        $this->middleware('permission:users.edit')
            ->only(['edit', 'update']);

        $this->middleware('permission:users.destroy')
            ->only('destroy');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return mixed
	 */
	public function index()
	{
		/**
		 * Extraer los usuarios que pertenecen al programa
		 * predeterminado excepto los administradores y el
		 * mismo usuario actualmente logeado
		*/
		$users = Programa::getPredeterminado()
			->users
			->where('admin', '==', 0)
			->where('id', '!=', auth()->id());

		return view('user.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return mixed
	 */
	public function create()
	{
		$programas   = auth()->user()->programas->pluck('nombre', 'id');
		$roles       = Role::get()->pluck('name', 'id');
		$permissions = Permission::get();

		return view('user.create', compact('programas', 'roles', 'permissions'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\UserStoreRequest  $request
	 * @return mixed
	 */
	public function store(UserStoreRequest $request)
	{
		$user = User::create( $request->all() );
		$user->programas()->sync( $request->get('programas') );
		$user->roles()->sync( [$request->get('roles')[0]] );
		$user->permissions()->sync( $request->get('permissions') );

		return redirect()->route('users.index')
			->with('info', ['type' => 'success', 'message' => 'Usuario agregado con éxito']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function show(User $user)
	{
		$this->authorize('access', $user);

		return view('user.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function edit(User $user)
	{
		$this->authorize('access', $user);
		$programas = auth()->user()->programas->pluck('nombre', 'id');
		$roles     = Role::get()->pluck('name', 'id');
		$permissions = Permission::get();

		return view('user.edit', compact('user', 'programas', 'roles', 'permissions'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UserUpdateRequest  $request
	 * @param  int  $id
	 * @return mixed
	 */
	public function update(UserUpdateRequest $request, $id)
	{
		$user = User::findOrFail($id);
		$this->authorize('access', $user);
		$user->fill( $request->all() );
		$user->save();
		$user->programas()->sync( $request->get('programas') );
		$user->roles()->sync( [$request->get('roles')[0]] );
		$user->permissions()->sync( $request->get('permissions') );

		return redirect()->route('users.edit', $user->id)
			->with('info', ['type' => 'success', 'message' => 'Usuario modificado con éxito']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user)
	{
		$this->authorize('access', $user);
		$user->programas()->sync( [] );
		$user->roles()->sync( [] );
        $user->delete();

        return redirect()->route('users.index')
            ->with('info', ['type' => 'success', 'message' => 'Usuario eliminado con éxito']);
	}

	public function actividades(User $user)
	{
		$actividades = Actividad::where('user_id', '=', $user->id)
            ->orderBy('created_at', 'desc')
			->paginate(15);

		return view('user.actividades', compact('actividades', 'user'));
	}
}
