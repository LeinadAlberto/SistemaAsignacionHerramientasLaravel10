<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {

        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view("admin.roles.create");
    }
    
    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            'name' => 'required'
        ]);

        $rol = new Role();

        $rol->name = $request->name;

        $rol->save();

        return redirect()->route("admin.role.index")
        ->with("mensaje", "Registro exitoso")
        ->with("icono", "success");

    }

    public function show($id)
    {
        $rol = Role::find($id);

        return view("admin.roles.show", compact("rol"));
    }

    public function edit($id)
    {
        $rol = Role::find($id);

        return view("admin.roles.edit", compact("rol")); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $rol = Role::find($id);

        $rol->name = $request->name;

        $rol->save();

        return redirect()->route("admin.role.index")
        ->with("mensaje", "Modificación exitosa")
        ->with("icono", "success");
    
    }

    public function destroy($id)
    {
        Role::destroy($id);

        return redirect()->route("admin.role.index")
        ->with("mensaje", "Registro eliminado exitosamente")
        ->with("icono", "success");
    }
}
