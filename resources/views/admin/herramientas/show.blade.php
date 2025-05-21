@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">DATOS REGISTRADOS</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        
        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">Datos de la Herramienta</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <div class="row">
                        <!-- Nombre, Categoría, Descripción, Código, Marca, Medida, Stock -->
                        <div class="col-md-8">
                            <!-- Nombre, Categoría -->
                            <div class="row">
                                <!-- Nombre de la Herramienta -->
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nombre">Nombre de la Herramienta</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-tools text-info"></i></span>
                                            </div>
                                            <input type="text" value="{{ $herramienta->nombre }}" class="form-control" readonly>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-7 -->

                                <!-- Categoría -->
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="categoria_id">Categoría</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-tags text-info"></i></span>
                                            </div>
                                            <input type="text" value="{{ $herramienta->categoria->nombre }}" class="form-control" readonly>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->

                            <!-- Descripción, Código -->
                            <div class="row">
                                <!-- Descripción-->
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-sticky-note text-info"></i></span>
                                            </div>
                                            <input type="text" value="{{ $herramienta->descripcion }}" class="form-control" readonly>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-7 -->
                                
                                <!-- Código -->
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="codigo">Código</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-barcode text-info"></i></span>
                                            </div>
                                            <input type="number" value="{{ $herramienta->codigo }}" class="form-control" readonly>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->

                            <!-- Marca, Medida, Stock -->
                            <div class="row">
                                <!-- Marca -->
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="marca">Marca</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-bandcamp text-info"></i></span>
                                            </div>
                                            <input type="text" value="{{ $herramienta->marca }}" class="form-control" readonly>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-5 -->

                                <!-- Medida -->
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="medida">Medida</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-ruler text-info"></i></span>
                                            </div>
                                            <input type="text" value="{{ $herramienta->medida }}" class="form-control" readonly>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-5 -->

                                <!-- Stock -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="stock">Stock</label>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-cubes text-info"></i></span>
                                            </div>
                                            
                                            <input value="{{ $herramienta->stock }}" class="form-control text-center bg-warning" readonly>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-2 -->
                            </div><!-- /.row -->
                        </div><!-- /.col-md-8 -->

                        <!-- Imágen -->
                        <div class="col-md-4">
                            <div class="row">
                                <!-- Imágen -->
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <label>Imagen del Producto</label>

                                        <br>
                                        
                                        <img src="{{ asset('storage/' . $herramienta->imagen ) }}" width="200px" alt="Imágen herramienta">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-3 -->
                            </div><!-- /.row -->
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
                    

                    <hr>

                    <!-- Botones de Cancelar y Registrar -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/herramientas') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div><!-- col-md-12 -->
                    </div><!-- /.row -->

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