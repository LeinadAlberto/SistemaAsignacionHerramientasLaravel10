<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    public function index()
    {   
        $herramientas = Herramienta::with('categoria')->get();

        return view('admin.herramientas.index', compact('herramientas'));
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('admin.herramientas.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            'codigo' => 'required|unique:herramientas',
            'nombre' => 'required'
        ]);

        $herramienta = new Herramienta();

        $herramienta->categoria_id = $request->categoria_id;
        $herramienta->codigo = $request->codigo;
        $herramienta->nombre = $request->nombre;
        $herramienta->descripcion = $request->descripcion;
        $herramienta->marca = $request->marca;
        $herramienta->medida = $request->medida;
        $herramienta->stock = $request->stock;
        
        if ($request->hasFile('imagen')) {
            $herramienta->imagen = $request->file('imagen')->store('herramientas', 'public');
        }

        $herramienta->save();

        return redirect()->route("admin.herramienta.index")
            ->with("mensaje", "Registro exitoso")
            ->with("icono", "success");
    }

    public function show(Herramienta $herramienta)
    {
        return view('admin.herramientas.show');
    }

    public function edit(Herramienta $herramienta)
    {
        return view('admin.herramientas.edit');
    }

    public function update(Request $request, Herramienta $herramienta)
    {
        
    }

    public function destroy(Herramienta $herramienta)
    {
        
    }
}
