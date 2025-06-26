<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use App\Models\Herramienta;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function show($id)
    {
        $herramienta = Herramienta::find($id);

        return view('admin.herramientas.show', compact('herramienta'));
    }

    public function edit($id)
    {
        $herramienta = Herramienta::find($id);

        $categorias = Categoria::all();

        return view('admin.herramientas.edit', compact('herramienta', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        /* $datos = request()->all();

        return response()->json($datos);  */

        $request->validate([
            'codigo' => 'required|unique:herramientas,codigo,' . $id,
            'nombre' => 'required'
        ]);

        $herramienta = Herramienta::find($id);

        $herramienta->categoria_id = $request->categoria_id;
        $herramienta->codigo = $request->codigo;
        $herramienta->nombre = $request->nombre;
        $herramienta->descripcion = $request->descripcion;
        $herramienta->marca = $request->marca;
        $herramienta->medida = $request->medida;
        $herramienta->stock = $request->stock;
        
        if ($request->hasFile('imagen')) {
            Storage::delete('public/' . $herramienta->imagen);
            $herramienta->imagen = $request->file('imagen')->store('herramientas', 'public');
        }

        $herramienta->save();

        return redirect()->route("admin.herramienta.index")
            ->with("mensaje", "Modificación exitosa")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $herramienta = Herramienta::find($id);
        Herramienta::destroy($id);
        Storage::delete('public/' . $herramienta->imagen);

        return redirect()->route("admin.herramienta.index")
        ->with("mensaje", "Registro eliminado exitosamente")
        ->with("icono", "success");
    }

    public function pdf_herramientas() {
        $configuracion = Configuracion::first();
        $herramientas = Herramienta::all();

        $pdf = PDF::loadView('admin.herramientas.pdf_herramientas', compact('herramientas', 'configuracion'));

        $pdf->setPaper('letter', 'portrait');
        $pdf->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->setOptions(["isHtml5ParserEnabled" => true]);
        $pdf->setOptions(["isRemoteEnabled" => true]);
        
        return $pdf->stream('herramientas.pdf');
    }
}
