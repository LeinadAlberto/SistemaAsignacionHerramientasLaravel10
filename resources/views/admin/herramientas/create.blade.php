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

                        <div class="row">
                            <!-- Nombre, Categoría, Descripción, Código, Marca, Medida, Stock -->
                            <div class="col-md-8">
                                <!-- Nombre, Categoría -->
                                <div class="row">
                                    <!-- Nombre de la Herramienta -->
                                    <div class="col-md-7">
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
                                    </div><!-- /.col-md-7 -->

                                    <!-- Categoría -->
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="categoria_id">Categoría <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-tags text-info"></i></span>
                                                </div>
                                                <select id="categoria_id" name="categoria_id" class="form-control" required>
                                                    <option>Seleccionar...</option>
                                                    @foreach ($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                                    @endforeach
                                                </select>
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
                                                <input name="descripcion" id="descripcion" type="text" value="{{ old('descripcion') }}" class="form-control" placeholder="Escriba aqui...">
                                            </div>
                                            @error('descripcion')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-7 -->
                                    
                                    <!-- Código -->
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="codigo">Código <span class="text-danger">*</span></label>
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-barcode text-info"></i></span>
                                                </div>
                                                <input name="codigo" id="codigo" type="number" value="{{ old('codigo') }}" class="form-control" placeholder="Escriba aqui...">
                                            </div>
                                            @error('codigo')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
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
                                                <input name="marca" id="marca" type="text" value="{{ old('marca') }}" class="form-control" placeholder="Escriba aqui...">
                                            </div>
                                            @error('marca')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
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
                                                <input name="medida" id="medida" type="text" value="{{ old('medida') }}" class="form-control" placeholder="Escriba aqui...">
                                            </div>
                                            @error('medida')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
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
                                                <input name="stock" id="stock" type="number" value="{{ old('stock', 0) }}" class="form-control" placeholder="0">
                                            </div>
                                            @error('stock')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-2 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-8 -->

                            <!-- Imágen -->
                            <div class="col-md-4">
                                <div class="row">
                                    <!-- Imágen -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="file">Imagen</label>
                                            
                                            <input type="file" id="file" name="imagen" accept=".jpg,.jpeg,.png" class="form-control">
                                            
                                            @error('imagen')
                                                <small style="...">{{ $message }}</small>
                                            @enderror
                            
                                            <br>

                                            <center>
                                                <output id="list"></output>
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
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-4 -->
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