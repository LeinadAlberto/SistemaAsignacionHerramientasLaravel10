@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">EDITAR ASIGNACIÓN</h1>
    <hr>
@stop

@section('content')

    <div class="row "> 
    
        <div class="col-md-3"></div>

        <div class="col-md-6">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">LLene los datos del formulario</h3>
                    
                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <!-- Mostrar mensajes de error/success -->
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ url('admin/asignaciones/' . $asignacion->id) }}" method="post">
                        
                        @csrf

                         @method('PUT')

                        <div class="row">
                            <!--  -->
                            <div class="col-md-12">
                                <!-- Herramienta -->
                                <div class="row">
                                    <!-- Herramienta -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="herramienta_id">Herramienta <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-tags text-info"></i></span>
                                                </div>
                                                <select id="herramienta_id" name="herramienta_id" class="form-control" required>
                                                    <option value="">Seleccione una herramienta</option>
                                                    @foreach ($herramientas as $herramienta)
                                                        <option value="{{ $herramienta->id }}" {{ $herramienta->id == $asignacion->herramienta_id ? 'selected' : '' }}>
                                                            {{ $herramienta->nombre }} ({{ $herramienta->codigo }}) - Stock: {{ $herramienta->stock }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->

                                    <!-- Encargado de Proyectos -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="usuario_id">Encargado de Proyectos <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-tags text-info"></i></span>
                                                </div>
                                                <select id="usuario_id" name="usuario_id" class="form-control" required>
                                                    <option value="">Seleccione al Encargado de Proyectos</option>
                                                    @foreach ($usuarios as $usuario)
                                                        <option value="{{ $usuario->id }}" {{ $usuario->id == $asignacion->usuario_id ? 'selected' : '' }}>
                                                            {{ $usuario->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <!-- Fecha de Inicio-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fecha_inicio">Fecha y Hora de Asignación <span class="text-danger">*</span></label>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="datetime-local" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $asignacion->fecha_inicio) }}" required>
                                            </div><!-- /.input-group -->
                                            @error('fecha_inicio')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->

                                    <!-- Fecha de Fin -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fecha_fin">Fecha y Hora de Devolución</label>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="datetime-local" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ old('fecha_fin', $asignacion->fecha_fin) }}">
                                            </div><!-- /.input-group -->
                                            @error('fecha_fin')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observaciones">Observaciones</label>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <textarea class="form-control" name="observaciones" id="observaciones" value="{{ old('observaciones', $asignacion->observaciones) }}" rows="3" required>
                                                    {{ old('observaciones') }}
                                                </textarea>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        
                        <hr>

                        <!-- Botones de Cancelar y Registrar -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/asignaciones') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-info">Modificar Asignación</button>
                                </div>
                            </div><!-- col-md-12 -->
                        </div><!-- /.row -->

                    </form>
                    
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