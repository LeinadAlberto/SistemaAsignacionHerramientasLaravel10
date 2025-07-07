<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Herramienta;

class AsignacionController extends Controller
{
    public function index()
    {
        $asignaciones = Asignacion::with('herramienta', 'usuario')->get();

        /* return response()->json($asignaciones); */ 

        return view('admin.asignaciones.index', compact('asignaciones'));
    }

    public function create()
    {
        $herramientas = Herramienta::all();

        $usuarios = User::role('Encargado de Proyectos')->get(); // Encargados de proyecto

        return view("admin.asignaciones.create", compact("herramientas" , "usuarios"));
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            'herramienta_id' => 'required|exists:herramientas,id',
            'usuario_id' => 'required|exists:users,id',
            'fecha_inicio' => 'required|date'
        ]);

        // Verificar disponibilidad
        $herramienta = Herramienta::find($request->herramienta_id);
        if ($herramienta->stock < 1) {
            return back()->with('error', 'No hay stock disponible de esta herramienta');
        } 

        // Actualizar stock
        $herramienta->decrement('stock');

        $asignacion = new Asignacion();

        $asignacion->herramienta_id = $request->herramienta_id;
        $asignacion->usuario_id = $request->usuario_id;
        $asignacion->fecha_inicio = $request->fecha_inicio;
        
        $asignacion->save();

        return redirect()->route("admin.asignacion.index")
            ->with("mensaje", "Registro exitoso")
            ->with("icono", "success"); 
    }

    public function show(Asignacion $asignacion)
    {
        //
    }

    public function edit($id)
    {
        $asignacion = Asignacion::find($id);

        $herramientas = Herramienta::all();

        $usuarios = User::role('Encargado de Proyectos')->get(); // Encargados de proyecto

        return view('admin.asignaciones.edit', compact('asignacion', 'herramientas', 'usuarios'));
    }

    public function update(Request $request, $id)
    {
        /* $datos = request()->all();

        return response()->json($datos); */
        
        $request->validate([
            'herramienta_id' => 'required|exists:herramientas,id',
            'usuario_id' => 'required|exists:users,id',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio'
        ]);

        $asignacion = Asignacion::find($id);

        $asignacion->herramienta_id = $request->herramienta_id;
        $asignacion->usuario_id = $request->usuario_id;
        $asignacion->fecha_inicio = $request->fecha_inicio;
        $asignacion->fecha_fin = $request->fecha_fin;
        $asignacion->observaciones = $request->observaciones;
        
        $asignacion->save();

        return redirect()->route("admin.asignacion.index")
            ->with("mensaje", "Modificación exitosa")
            ->with("icono", "success");
    }

    public function destroy(Asignacion $asignacion)
    {
        
    }
}
