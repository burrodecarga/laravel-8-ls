<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $roles = $roles->each(function($role){
        $role->cont_user = User::where('name',$role->name)->count();
        });

       return view('roles.index',compact('roles'));
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
        $permission_id=[];
        return view('roles.create',compact('role','permissions','permission_id'));
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

        $role = Role::create(['name' =>$request->name]);
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
       return view('roles.edit',compact('role','permissions','permission_id'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role ' . $role->name . ' Eliminado exitosamente');


    }
}
