@extends('adminlte::page')

@section('content_header')
    <h1>Configuracion de Datos de la Empresa</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos de la Empresa</h3>
                </div><!-- /.card-header -->

                <div class="card-body">
                    <form action="{{ url('admin/configuraciones/create') }}" method="post" enctype="multipart/form-data">
                        @csrf 
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <!-- Nombre -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nombre <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-info">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" 
                                                    value="{{ old('nombre', $configuracion->nombre ?? '') }}" name="nombre"
                                                    placeholder="Escriba aquí..." required>
                                            </div><!-- /.input-group-->
                                            @error('nombre')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->

                                    <!-- Descripción -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Descripción <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-info">
                                                        <i class="fas fa-align-left"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" 
                                                    value="{{ old('descripcion', $configuracion->descripcion ?? '') }}" name="descripcion"
                                                    placeholder="Escriba aquí..." required>
                                            </div><!-- /.input-group-->
                                            @error('descripcion')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Correo Electrónico <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-info">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" 
                                                    value="{{ old('email', $configuracion->email ?? '') }}" name="email"
                                                    placeholder="Escriba aquí..." required>
                                            </div><!-- /.input-group-->
                                            @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->

                                    <!-- Sitio Web -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Sitio Web</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-info">
                                                        <i class="fas fa-globe"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" 
                                                    value="{{ old('web', $configuracion->web ?? '') }}" name="web"
                                                    placeholder="Escriba aquí...">
                                            </div><!-- /.input-group-->
                                            @error('web')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <!-- Dirección -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-info">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </span>
                                                </div>

                                                <textarea style="resize: none;" name="direccion" id="" cols="30" rows="3" class="form-control" placeholder="Escriba aquí..." required>{{ old('direccion', $configuracion->direccion ?? '') }}</textarea>
                                                {{-- <input type="text" class="form-control" 
                                                    value="{{ old('direccion', $configuracion->direccion ?? '') }}" name="direccion"
                                                    placeholder="Escriba aquí..." required>--}}
                                            </div> <!-- /.input-group-->
                                            @error('direccion')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->

                                    <!-- Teléfono -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Teléfono <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-info">
                                                        <i class="fas fa-phone"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" 
                                                    value="{{ old('telefono', $configuracion->telefono ?? '') }}" name="telefono"
                                                    placeholder="Escriba aquí..." required>
                                            </div><!-- /.input-group-->
                                            @error('telefono')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                
                            </div><!-- /.col-md-8 -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logo">Logo <span class="text-danger">*</span></label>
                                    <input type="file" id="file" name="logo" accept=".jpg,.jpeg,.png" class="form-control">
                                    @error('logo')
                                    <small style="...">{{ $message }}</small>
                                    @enderror
                                    <br>
                                    <center>
                                        <output id="list">
                                            @if (isset($configuracion->logo))
                                                <img class="thumb thumbnail" src="{{ url($configuracion->logo) }}" width="70%" alt="logo" title="logo">
                                            @endif
                                        </output>
                                    </center>

                                    <script>
                                        function archivo(evt) {
                                            var files = evt.target.files; //FileList object
                                            // Obtenemos la imagen del campo "file".
                                            for (var i = 0, f; f = files[i]; i++) {
                                                // Solo admitimos imágenes.
                                                if (!f.type.match('image.*')) {
                                                    continue;
                                                }
                                                var reader = new FileReader();
                                                reader.onload = (function (theFile) {
                                                    return function (e) {
                                                        // Insertamos la imagen
                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="70%" title="', escape(theFile.name), '"/>'].join('');
                                                    };
                                                }) (f);
                                                reader.readAsDataURL(f);
                                            }
                                        }
                                        document.getElementById('file').addEventListener('change', archivo, false);
                                    </script>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-4 -->
                        </div><!-- /.row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">Guardar</button>
                                <a href="{{ url('admin/configuraciones') }}" class="btn btn-secondary">Cancelar</a>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
@stop

@section('css')
    <style>
        .btn-secondary {
            border: none;
        }
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

        .btn-info:hover {
            color: #fff;
            background-color: #91541b;
            border-color:#8f4d0f;
        }

        .text-info {
            color: #DF8129 !important;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #DF8129;
            border-color:#DF8129;
        }
        link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #DF8129;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }
        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #DF8129;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }
        .page-link:hover {
            z-index: 2;
            color: #DF8129;
            text-decoration: none;
            background-color: #e9ecef;
            border-color:#dee2e6;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop