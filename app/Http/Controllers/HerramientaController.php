<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
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
        return view('admin.herramientas.create');
    }

    public function store(Request $request)
    {
        
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
