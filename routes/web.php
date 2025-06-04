<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

// Rutas para Roles
// Ruta para listar Roles
Route::get('/admin/roles', [App\Http\Controllers\RoleController::class, 'index'])
->name('admin.role.index')->middleware('auth');
// Ruta para crear Roles
Route::get('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'create'])
->name('admin.role.create')->middleware('auth');

Route::post('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'store'])
->name('admin.role.store')->middleware('auth');

Route::get('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'show'])
->name('admin.role.show')->middleware('auth');

Route::get('/admin/roles/{id}/edit', [App\Http\Controllers\RoleController::class, 'edit'])
->name('admin.role.edit')->middleware('auth');

Route::put('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'update'])
->name('admin.role.update')->middleware('auth');
Route::delete('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])
->name('admin.role.destroy')->middleware('auth');

// Rutas para Usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])
->name('admin.usuario.index')->middleware('auth');
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])
->name('admin.usuario.create')->middleware('auth');
Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])
->name('admin.usuario.store')->middleware('auth');
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])
->name('admin.usuario.show')->middleware('auth');
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])
->name('admin.usuario.edit')->middleware('auth');
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])
->name('admin.usuario.update')->middleware('auth');
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])
->name('admin.usuario.destroy')->middleware('auth');

// Rutas para Categorías
Route::get('/admin/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])
->name('admin.categoria.index')->middleware('auth');
Route::get('/admin/categorias/create', [App\Http\Controllers\CategoriaController::class, 'create'])
->name('admin.categoria.create')->middleware('auth');
Route::post('/admin/categorias/create', [App\Http\Controllers\CategoriaController::class, 'store'])
->name('admin.categoria.store')->middleware('auth');
Route::get('/admin/categorias/{id}', [App\Http\Controllers\CategoriaController::class, 'show'])
->name('admin.categoria.show')->middleware('auth');
Route::get('/admin/categorias/{id}/edit', [App\Http\Controllers\CategoriaController::class, 'edit'])
->name('admin.categoria.edit')->middleware('auth');
Route::put('/admin/categorias/{id}', [App\Http\Controllers\CategoriaController::class, 'update'])
->name('admin.categoria.update')->middleware('auth');
Route::delete('/admin/categorias/{id}', [App\Http\Controllers\CategoriaController::class, 'destroy'])
->name('admin.categoria.destroy')->middleware('auth');

// Rutas para Herramientas
Route::get('/admin/herramientas', [App\Http\Controllers\HerramientaController::class, 'index'])
->name('admin.herramienta.index')->middleware('auth');
Route::get('/admin/herramientas/create', [App\Http\Controllers\HerramientaController::class, 'create'])
->name('admin.herramienta.create')->middleware('auth');
Route::post('/admin/herramientas/create', [App\Http\Controllers\HerramientaController::class, 'store'])
->name('admin.herramienta.store')->middleware('auth');
Route::get('/admin/herramientas/{id}', [App\Http\Controllers\HerramientaController::class, 'show'])
->name('admin.herramienta.show')->middleware('auth');
Route::get('/admin/herramientas/{id}/edit', [App\Http\Controllers\HerramientaController::class, 'edit'])
->name('admin.herramienta.edit')->middleware('auth');
Route::put('/admin/herramientas/{id}', [App\Http\Controllers\HerramientaController::class, 'update'])
->name('admin.herramienta.update')->middleware('auth');
Route::delete('/admin/herramientas/{id}', [App\Http\Controllers\HerramientaController::class, 'destroy'])
->name('admin.herramienta.destroy')->middleware('auth');

// Rutas para Inventarios
Route::get('/admin/inventarios', [App\Http\Controllers\InventarioController::class, 'index'])
->name('admin.inventario.index')->middleware('auth');

// Rutas para Herramientas
Route::get('/admin/configuraciones', [App\Http\Controllers\ConfiguracionController::class, 'index'])
->name('admin.configuracion.index')->middleware('auth');
Route::get('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracionController::class, 'create'])
->name('admin.configuracion.create')->middleware('auth');
Route::post('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracionController::class, 'store'])
->name('admin.configuracion.store')->middleware('auth');
Route::get('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'show'])
->name('admin.configuracion.show')->middleware('auth');
Route::get('/admin/configuraciones/{id}/edit', [App\Http\Controllers\ConfiguracionController::class, 'edit'])
->name('admin.configuracion.edit')->middleware('auth');
Route::put('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'update'])
->name('admin.configuracion.update')->middleware('auth');
Route::delete('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'destroy'])
->name('admin.configuracion.destroy')->middleware('auth');