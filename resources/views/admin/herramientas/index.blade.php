@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">LISTADO DE HERRAMIENTAS</h1>
    <hr>
@stop

@section('content')

    <div class="row"> 
        <div class="col-md-2"></div>

        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">

                    <h3 class="card-title">Herramientas registradas</h3>
                    
                    <div class="card-tools">
                        <a href="{{ url('/admin/herramientas/pdf') }}" class="btn btn-warning" target="__blank">
                            <i class="fas fa-print"></i> Reporte de Herramientas</a>
                        <a href="{{ url('/admin/herramientas/create') }}" class="btn btn-info">Crear Nuevo</a>
                    </div>

                </div><!-- /.card-header --> 
                
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-hover ">
                        <thead>
                            <tr class="text-center text-white" style="background-color: #343A40">
                                <th>Nro</th>
                                <th>Categoría</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Medida</th>
                                <th>Stock</th>
                                <th>Imágen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $contador = 1;
                            @endphp
                            @foreach ($herramientas as $herramienta)
                                <tr>
                                    <td class="text-center align-middle">{{ $contador++ }}</td>
                                    <td class="align-middle">{{ $herramienta->categoria->nombre }}</td>
                                    <td class="align-middle">{{ $herramienta->codigo }}</td>
                                    <td class="align-middle">{{ $herramienta->nombre }}</td>
                                    <td class="align-middle">{{ $herramienta->marca }}</td>
                                    <td class="align-middle">{{ $herramienta->medida }}</td>
                                    <td class="align-middle text-center" style="font-size: 20px;">
                                        <span class="badge badge-warning p-2">{{ $herramienta->stock }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <img src="{{ asset('storage/' . $herramienta->imagen ) }}" width="60px" alt="Imágen herramienta">
                                    </td>
                                    
                                    <!-- Botones Ver, Editar y Eliminar -->
                                    <td class="text-center align-middle">
                                        <div class="btn-group" role="group">
                                            <!-- Boton Ver -->
                                            <a href="{{ url('/admin/herramientas/' . $herramienta->id) }}" 
                                                class="btn btn-sm btn-info" 
                                                style="border-radius: 4px 0px 0px 4px"
                                                title="Ver">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <!-- Boton Editar -->
                                            <a href="{{ url('/admin/herramientas/' . $herramienta->id . '/edit') }}" 
                                                class="btn btn-sm btn-success" 
                                                style="border-radius: 4px 0px 0px 4px"
                                                title="Editar">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <!-- Boton Eliminar -->
                                            <form action="{{ url('/admin/herramientas/' . $herramienta->id) }}" method="post"
                                                onclick="preguntar{{$herramienta->id}}(event)" id="miFormulario{{$herramienta->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-danger btn-sm"
                                                        style="border-radius: 0px 4px 4px 0px" 
                                                        title="Eliminar">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <script>
                                                function preguntar{{$herramienta->id}}(event) {
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
                                                            var form = $('#miFormulario{{$herramienta->id}}');
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

        /* Estilos base para todos los estados */
.estado-badge {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 16px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    text-align: center;
    min-width: 100px; /* Ancho uniforme */
    box-sizing: border-box;
    position: relative;
    transition: all 0.2s ease;
    
    /* Sombreado 3D */
    box-shadow: 
        0 2px 0 rgba(0,0,0,0.1), /* Sombra inferior */
        0 3px 5px rgba(0,0,0,0.15), /* Sombra difuminada */
        inset 0 1px 0 rgba(255,255,255,0.3); /* Resaltado interior */
    
    /* Efecto de relieve */
    border-top: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(0,0,0,0.1);
}

/* Efecto hover para todos los estados */
.estado-badge:hover {
    transform: translateY(-1px);
    box-shadow: 
        0 3px 0 rgba(0,0,0,0.1),
        0 5px 8px rgba(0,0,0,0.15),
        inset 0 1px 0 rgba(255,255,255,0.3);
}

/* Efecto active (al hacer clic) */
.estado-badge:active {
    transform: translateY(1px);
    box-shadow: 
        0 1px 0 rgba(0,0,0,0.1),
        0 2px 3px rgba(0,0,0,0.1),
        inset 0 1px 0 rgba(255,255,255,0.1);
}

/* Bueno - Verde con icono de check */
.estado-bueno {
    background-color: #28a745;
    color: white;
    border: 1px solid #218838;
    text-shadow: 0 1px 1px rgba(0,0,0,0.2);
}

.estado-bueno::before {
    content: "✓ ";
    font-weight: bold;
}

/* Regular - Amarillo/naranja con icono de advertencia */
.estado-regular {
    background-color: #ffc107;
    color: #212529;
    border: 1px solid #e0a800;
    text-shadow: 0 1px 1px rgba(255,255,255,0.5);
}

.estado-regular::before {
    content: "⚠ ";
}

/* Baja - Rojo con icono de alerta */
.estado-baja {
    background-color: #dc3545;
    color: white;
    border: 1px solid #c82333;
    text-shadow: 0 1px 1px rgba(0,0,0,0.3);
}

.estado-baja::before {
    content: "✗ ";
    font-weight: bold;
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
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Herramientas",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Herramientas",
                    "infoFiltered": "(Filtrado de _MAX_ total Herramientas)",
                    "lengthMenu": "Mostrar _MENU_ Herramientas",
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