@extends('adminlte::page')

@section('content_header')
    <h1>Usuarios / Modificar datos del Usuario</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-4">

            <div class="card card-outline card-success">

                <div class="card-header">

                    <h3 class="card-title">LLene los datos del formulario</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <form action="{{ url('admin/usuarios/' . $usuario->id) }}" method="post">
                        
                        @csrf

                        @method('PUT')

                        <!-- Nombre del Rol -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Rol <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-check text-success"></i></span>
                                        </div>
                                        <select name="rol" class="form-control" required>
                                            <option value="">Seleccionar...</option>
                                            @foreach ($roles as $rol)
                                                <option value="{{ $rol->name }}" 
                                                    {{ $rol->name == $usuario->roles->pluck('name')->implode(', ') ? 'selected' : '' }}>
                                                    {{ $rol->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <!-- Nombre del Usuario -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre del Usuario <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user text-success"></i></span>
                                        </div>
                                        <input name="name" value="{{ $usuario->name }}" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <!-- Correo Electrónico -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Correo Electrónico <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope text-success"></i></span>
                                        </div>
                                        <input name="email" value="{{ $usuario->email }}" type="email" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <!-- Contraseña -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Contraseña <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock text-success"></i></span>
                                        </div>
                                        <input name="password" type="password" class="form-control" placeholder="Escriba aqui...">
                                    </div>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <!-- Repetir Contraseña -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Repetir Contraseña <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock text-success"></i></span>
                                        </div>
                                        <input name="password_confirmation" type="password" class="form-control" placeholder="Escriba aqui...">
                                    </div>
                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror 
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Modificar</button>
                                </div>
                            </div><!-- col-md-12 -->
                        </div><!-- /.row -->
                    </form>
                    
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 

    </div><!-- /.row --> 

@stop

@section('css')  
@stop


@section('js')   
@stop