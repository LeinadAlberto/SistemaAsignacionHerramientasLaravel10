<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Herramientas</title>

        <style>
            body {
                font-family: Arial, Arial, Helvetica, sans-serif
            }

            .table {
                width: 100%;
                margin-bottom: 1rem;
                color: #212529;
                border-collapse: collapse;
            }

            .table-bordered {
                border: 1px solid #000000;
            }

            .table-bordered th, 
            .table-bordered td {
                border: 1px solid #000000;
            }

            .table-bordered thead th {
                border-bottom-width: 2px; 
            }
        </style>
    </head>

    <body>
        
        <table border="0" style="font-size: 8pt;">

            <tr>
                <td style="text-align: center;">
                    <img src="{{ url($configuracion->logo) }}" alt="Logo" width="120" style="display: block; margin-bottom: 10px;"><br>
                    <b>{{ $configuracion->nombre }}</b><br><br>
                    {{ $configuracion->direccion }}</b><br>
                    {{ $configuracion->telefono }}</><br>
                    {{ $configuracion->email }}</><br>
                </td>

                <td style="width: 350px"></td>

                {{-- <td>
                    <img src="{{ $barcodePNG }}" style="width: 200px; height:50px; display: block; margin: 0 auto;">

                    <div style="text-align: center; font-family: monospace; margin-top: 5px;">
                        CI: {{ $matricula->estudiante->ci }}
                    </div>
                </td> --}}
            </tr>

        </table>

        <h3 style="text-align: center">
            <b>
                <u>CATÁLOGO DE HERRAMIENTAS</u>
            </b>
        </h3>

        <table class="table table-bordered" cellpadding="6" style="width: 100%; font-size: 8pt;">
            <tr style="text-align: center; background-color: #F2F2F2">
                <td><b>Nro</b></td>
                <td><b>Categoría</b></td>
                <td><b>Código</b></td>
                <td><b>Nombre</b></td>
                <td><b>Marca</b></td>
                <td><b>Medida</b></td>
                <td><b>Stock</b></td>
            </tr>
            @php
                $contador = 1;    
            @endphp
            @foreach ($herramientas as $herramienta)
                <tr>
                    <td style="text-align: center;">{{ $contador++ }}</td>
                    <td>{{ $herramienta->categoria->nombre }}</td>
                    <td style="text-align: center;">{{ $herramienta->codigo }}</td>
                    <td style="text-align: center;">{{ $herramienta->nombre }}</td>
                    <td style="text-align: center;">{{ $herramienta->marca }}</td>
                    <td style="text-align: center;">{{ $herramienta->medida }}</td>
                    <td style="text-align: center;">{{ $herramienta->stock }}</td>
                </tr>
            @endforeach
        </table>
    </body>

</html>


