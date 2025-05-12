@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">EDITAR CATEGORÍA</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-4"></div>

        <div class="col-md-4">

            <div class="card card-outline card-success">

                <div class="card-header">

                    <h3 class="card-title">LLene los datos del formulario</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <form action="{{ url('admin/categorias/' . $categoria->id) }}" method="post">
                        
                        @csrf

                        @method('PUT')

                        <!-- Nombre de la Categoría -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre de la Categoría <span class="text-danger">*</span></label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user text-success"></i></span>
                                    </div>
                                    <input name="nombre" id="nombre" type="text" value="{{ old('nombre', $categoria->nombre) }}" class="form-control" placeholder="Escriba aqui..." required>
                                </div>
                                @error('nombre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-6 -->
                
                        <!-- Descripción -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción <span class="text-danger">*</span></label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock text-success"></i></span>
                                    </div>
                                    <textarea name="descripcion" id="descripcion" rows="4" class="form-control" 
                                        placeholder="Escriba aqui..." required style="resize: none;" 
                                        value="{{ old('descripcion') }}">{{ $categoria->descripcion }}</textarea>
                                </div>
                                @error('descripcion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-6 -->
                          
                        <hr>

                        <!-- Botones de Cancelar y Registrar -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/categorias') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Modificar</button>
                                </div>
                            </div><!-- col-md-12 -->
                        </div><!-- /.row -->

                    </form>
                    
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 

        <div class="col-md-4"></div>

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