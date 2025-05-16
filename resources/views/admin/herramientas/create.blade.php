@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">CREAR NUEVA HERRAMIENTA</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        {{-- <div class="col-md-2"></div> --}}

        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">LLene los datos del formulario</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <form action="{{ url('admin/herramientas/create') }}" method="post" enctype="multipart/form-data">
                        
                        @csrf

                        <!-- Categoría, Código,  -->
                        <div class="row">
                            <!-- Nombre de la Herramienta -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="nombre">Nombre de la Herramienta <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tools text-info"></i></span>
                                        </div>
                                        <input name="nombre" id="nombre" type="text" value="{{ old('nombre') }}" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('nombre')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->

                            <!-- Categoría -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="categoria">Categoría <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tags text-info"></i></span>
                                        </div>
                                        <select id="categoria" name="categoria" class="form-control" required>
                                            <option>Seleccionar...</option>
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->

                            <!-- Código -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="codigo">Código <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-barcode text-info"></i></span>
                                        </div>
                                        <input name="codigo" id="codigo" type="text" value="{{ old('codigo') }}" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-3 -->
                        </div><!-- /.row -->

                        <!-- Contraseña y Repetir Contraseña-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock text-info"></i></span>
                                        </div>
                                        <input name="password" type="password" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Repetir Contraseña <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock text-info"></i></span>
                                        </div>
                                        <input name="password_confirmation" type="password" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror 
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                        <!-- Correo Electrónico -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Correo Electrónico <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                        </div>
                                        <input name="email" type="email" class="form-control" placeholder="Escriba aqui..." required>
                                    </div>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
 
                        <hr>

                        <!-- Botones de Cancelar y Registrar -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/herramientas') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-info">Registrar</button>
                                </div>
                            </div><!-- col-md-12 -->
                        </div><!-- /.row -->

                    </form>
                    
                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-4 --> 

        {{-- <div class="col-md-2"></div> --}}

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