@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">DATOS REGISTRADOS</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">Datos de la Categoría</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <div class="row">
                        <!-- Nombre de la Categoría -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre de la Categoría</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                    </div>
                                    <input value="{{ $categoria->nombre }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-12 -->

                        <!-- Fecha y Hora de registro -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fecha y hora de registro</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                    </div>
                                    <input value="{{ $categoria->created_at }}" class="form-control" readonly>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <!-- Descripción -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descripción</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                    </div>
                                    <textarea style="resize: none;" cols="30" rows="3" class="form-control" readonly>{{ $categoria->descripcion }}</textarea>
                        
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/categorias') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div><!-- col-md-12 -->
                    </div><!-- /.row -->
                  
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 
        <div class="col-md-3"></div>

    </div><!-- /.row --> 

@stop

@section('css') 
    <style>
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
            background-color: #DF8129;
            color: #fff;
        }

        .card-info.card-outline {
            border-top:3px solid #DF8129;
        }
        
        .btn-info {
            background-color: #DF8129;
            border:none;
        }

        .text-info {
            color: #DF8129 !important;
        }

        .btn-info:hover {
            color: #fff;
            background-color: #91541b;
            border-color:#8f4d0f;
        }
    </style>
@stop
      
@section('js')   
@stop