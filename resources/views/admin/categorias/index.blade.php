@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">LISTADO DE CATEGORÍAS</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        <div class="col-md-2"></div>

        <div class="col-md-8">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">Categorías registradas</h3>
                    
                    <div class="card-tools">
                        <a href="{{ url('/admin/categorias/create') }}" class="btn btn-info">Crear Nuevo</a>
                    </div>

                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="text-center text-white" style="background-color: #343A40">
                                <th>Nro</th>
                                <th>Nombre de la Categoría</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $contador = 1;
                            @endphp
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td class="text-center align-middle">{{ $contador++ }}</td>
                                    <td class="align-middle">{{ $categoria->nombre }}</td>
                                    <td class="align-middle">{{ $categoria->descripcion }}</td>
                                    
                                    <!-- Botones Ver, Editar y Eliminar -->
                                    <td class="text-center align-middle">
                                        <div class="btn-group" role="group">
                                            <!-- Boton Ver -->
                                            <a href="{{ url('/admin/categorias/' . $categoria->id) }}" 
                                                class="btn btn-sm btn-info" 
                                                style="border-radius: 4px 0px 0px 4px">
                                                <i class="fas fa-eye" title="Ver"></i>
                                            </a>

                                            <!-- Boton Editar -->
                                            <a href="{{ url('/admin/categorias/' . $categoria->id . '/edit') }}" 
                                                class="btn btn-sm btn-success" 
                                                style="border-radius: 4px 0px 0px 4px">
                                                <i class="fas fa-pencil-alt" title="Editar"></i>
                                            </a>

                                            <!-- Boton Eliminar -->
                                            <form action="{{ url('/admin/categorias/' . $categoria->id) }}" method="post"
                                                onclick="preguntar{{$categoria->id}}(event)" id="miFormulario{{$categoria->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 0px 4px 4px 0px">
                                                    <i class="fas fa-trash" title="Eliminar"></i>
                                                </button>
                                            </form>
                                            <script>
                                                function preguntar{{$categoria->id}}(event) {
                                                    event.preventDefault();
                                                    Swal.fire({
                                                        title: '¿Desea eliminar este registro?',
                                                        text: '',
                                                        icon: 'question',
                                                        showDenyButton: true,
                                                        confirmButtonText: 'Eliminar', 
                                                        confirmButtonColor: '#A5161D', 
                                                        denyButtonColor: '#270A0A', 
                                                        denyButtonText: 'Cancelar', 
                                                    }).then( (result) => {
                                                        if (result.isConfirmed) {
                                                            var form = $('#miFormulario{{$categoria->id}}');
                                                            form.submit();
                                                        }
                                                    }); 
                                                }
                                            </script>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-8 --> 

        <div class="col-md-2"></div>
    </div><!-- /.row --> 

@stop

@section('css')
    <style>
        /* Fondo transparente y sin borde en el contenedor */
        #example1_wrapper .dt-buttons {
            background-color: transparent;
            box-shadow: none;
            border: none;
            display: flex;
            justify-content: center; /* Centrar los botones */
            gap: 10px; /* Espaciado entre botones */
            margin-bottom: 15px; /* Separar botones de la tabla */
        }

        /* Estilo personalizado para los botones */
        #example1_wrapper .btn {
            color: #FFF; 
            border-radius: 4px;
            padding: 5px 15px;
            font-size: 14px;
        }

        /* Colores por tipo de boton */
        .btn-danger { background-color: #DC3545; border: none; }
        .btn-success { background-color: #28A745; border: none; }
        .btn-info { background-color: #17A2B8; border: none; }
        .btn-warning { background-color: #FFC107; color: #212529; border: none; }
        .btn-default { background-color: #6E7176; color: #212529; border: none; }
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
    <script>
        $(function() {
            $('#example1').DataTable({
                "pageLength": 5,
                "language": {
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Categorías",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Categorías",
                    "infoFiltered": "(Filtrado de _MAX_ total Categorías)",
                    "lengthMenu": "Mostrar _MENU_ Categorías",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscador:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                buttons: [
                    { text: '<i class="fas fa-copy"></i> COPIAR', extend: 'copy', className: 'btn btn-default'},
                    { text: '<i class="fas fa-file-pdf"></i> PDF', extend: 'pdf', className: 'btn btn-danger' },
                    { text: '<i class="fas fa-file-csv"></i> CSV', extend: 'csv', className: 'btn btn-info' },
                    { text: '<i class="fas fa-file-excel"></i> EXCEL', extend: 'excel', className: 'btn btn-success' },
                    { text: '<i class="fas fa-print"></i> IMPRIMIR', extend: 'print', className: 'btn btn-warning' },
                ] 
            }).buttons().container().appendTo('#example1_wrapper .row:eq(0)');
        });
    </script>
@stop