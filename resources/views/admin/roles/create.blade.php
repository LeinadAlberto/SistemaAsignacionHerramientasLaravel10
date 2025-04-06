@extends('adminlte::page')

@section('content_header')
    <h1>Roles / Registro de un nuevo Rol</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-4">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">LLene los datos del formulario</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <form action="{{ url('admin/roles/create') }}" method="post">
                        
                        @csrf

                        <div class="row">
                                
                            <!-- Nombre del Rol -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre del Rol <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-check text-info"></i></span>
                                        </div>
                                        <input name="name" type="text" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->

                        </div><!-- /.row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/roles') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-info">Registrar</button>
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
    <style>
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
            background-color: #DF8129;
            color: #fff;
        }
    </style>
@stop


@section('js')   
@stop