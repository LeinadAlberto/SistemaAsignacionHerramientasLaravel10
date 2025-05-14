<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Herramienta;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        $total_usuarios = User::count();
        $total_categorias = Categoria::count();
        $total_roles = Role::count();
        $total_herramientas = Herramienta::count();

        return view("admin.index", compact("total_usuarios", "total_categorias", "total_roles", "total_herramientas"));
    }
}
