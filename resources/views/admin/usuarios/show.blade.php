@extends('adminlte::page')

@section('content_header')
    <h1>Usuarios / Datos registrados</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-4">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">Datos del Usuario</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <!-- Nombre del Rol -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Rol del Usuario</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-check text-info"></i></span>
                                    </div>
                                    <input value="{{ $usuario->roles->pluck('name')->implode(', ') }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <!-- Nombre del Usuario -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre del Usuario</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                    </div>
                                    <input value="{{ $usuario->name }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <!-- Correo Electrónico -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Correo Electrónico</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                    </div>
                                    <input value="{{ $usuario->email }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div><!-- col-md-12 -->
                    </div><!-- /.row -->
                  
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 

    </div><!-- /.row --> 

@stop

@section('css')  
@stop


@section('js')   
@stop