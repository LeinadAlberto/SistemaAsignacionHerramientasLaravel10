<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view("admin.categorias.create");
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            'nombre' => 'required|unique:categorias',
            'descripcion' => 'required'
        ]);

        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        
        $categoria->save();

        return redirect()->route("admin.categoria.index")
            ->with("mensaje", "Registro exitoso")
            ->with("icono", "success");
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);

        return view('admin.categorias.show', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('admin.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            'nombre' => 'required|unique:categorias,nombre,' . $id,
            'descripcion' => 'required'
        ]);

        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        
        $categoria = Categoria::find($id);

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        $categoria->save();

        return redirect()->route("admin.categoria.index")
            ->with("mensaje", "Modificación exitosa")
            ->with("icono", "success");

    }

    public function destroy($id)
    {
        Categoria::destroy($id);

        return redirect()->route("admin.categoria.index")
        ->with("mensaje", "Registro eliminado exitosamente")
        ->with("icono", "success");
    }
}
