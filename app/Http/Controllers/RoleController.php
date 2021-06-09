<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
         $this->middleware(['role:super-admin|admin']);
        // $this->middleware(['can:crear cursos'])->only('create,store');
        // $this->middleware(['can:actualizar cursos'])->only('edit,update,goals');
        // $this->middleware(['can:eliminar cursos'])->only('destroy');
    }


    public function index()
    {
        $roles = Role::all();
        $roles = $roles->each(function ($role) {
            $role->cont_user = User::where('name', $role->name)->count();
        });

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = new Role;
        $permissions = Permission::orderBy('permission', 'asc')->get();
        $permission_id = [];
        return view('roles.create', compact('role', 'permissions', 'permission_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);

        $role = Role::create(['name' => $request->name]);
        $permissions = collect($request->permissions);
        $role->syncPermissions($permissions);
        return redirect()->route('roles.index')->with('success', 'Role ' . $role->name . ' creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permission_id = $role->permissions->pluck('id')->toArray();
        $permissions = Permission::orderBy('permission', 'asc')->get();
        return view('roles.edit', compact('role', 'permissions', 'permission_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'name' => 'required|unique:roles,id,' . $role->id,
        ]);

        $role->update($request->all());
        $role->save();
        $permissions = collect($request->permissions);
        $role->syncPermissions($permissions);
        return redirect()->route('roles.index')->with('success', 'Role ' . $role->name . ' creado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if ($role->id == 5 || $role->name == 'super-admin') {
            return redirect()->route('roles.index')->with('success', 'Role ' . $role->name . ' No eliminable');
        }
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role ' . $role->name . ' Eliminado exitosamente');
    }

    public function rutas()
    {
        $routeList = Route::getRoutes();
        foreach ($routeList as $value) {
            echo $value->uri() . '  -  ' . $value->getName() . '<br>';
        }
    }
}
