@include('components.layout')
@include('components.header')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 2px solid rgb(31, 33, 138);
            padding: 8px; /* Mantener el padding normal */
            text-align: left;
        }
        th {
            background-color: rgb(31, 33, 138);
            color: white;
        }
        /* Ajustes para columnas */
        th:nth-child(1), td:nth-child(1) {
            width: 50%; /* Ajustar el ancho de la columna del nombre */
        }
        th:nth-child(2), td:nth-child(2) {
            width: 50%; /* Ajustar el ancho de la columna del video */
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Mantener relación de aspecto 16:9 */
            height: 0; /* Altura inicial en cero */
            overflow: hidden; /* Ocultar el desbordamiento */
            display: flex; /* Flexbox para centrar el video */
            justify-content: center; /* Centrar horizontalmente */
        }
        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; /* Hacer que el iframe sea responsive */
            height: 100%; /* Hacer que el iframe ocupe el 100% del contenedor */
            border: 0; /* Eliminar borde del iframe */
        }
        /* Ajustes para dispositivos pequeños */
        @media (max-width: 768px) {
            table {
                display: block; /* Cambiar a bloque para mejor control */
            }
            thead {
                display: none; /* Ocultar encabezados en la vista móvil */
            }
            tbody {
                display: block; /* Hacer el cuerpo de la tabla bloque */
                width: 100%; /* Asegurar que ocupe todo el ancho */
            }
            tr {
                display: flex; /* Flexbox para alinear títulos y videos */
                flex-direction: column; /* Colocar elementos en columna */
                align-items: center; /* Centrar elementos en la fila */
                margin-bottom: 20px; /* Espaciado entre filas */
            }
            td {
                padding: 4px; /* Reducir el padding en pantallas pequeñas */
                text-align: center; /* Centrar el contenido de las celdas */
                display: flex; /* Hacer celdas flex */
                flex-direction: column; /* Colocar elementos en columna */
                align-items: center; /* Centrar contenido */
            }
            td:first-child {
                font-size: 14px; /* Tamaño de fuente más pequeño para el título */
                margin-bottom: 8px; /* Espacio entre título y video */
            }
            .video-container {
                padding-bottom: 75%; /* Cambiar relación de aspecto en pantallas pequeñas */
                width: 100%; /* Asegurar que ocupe todo el ancho */
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center">10 Videos de los lugares más visitados en Mendoza</h1> <!-- Título centrado -->

        @if (count($videos) > 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre del Video</th>
                            <th>Video</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <td>{{ $video['snippet']['title'] }}</td>
                                <td>
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/{{ $video['id']['videoId'] }}" allowfullscreen></iframe>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No se encontraron videos.</p>
        @endif
    </div>

    @include('partials.slidebar2')
    @include('components.footer')

</body>
</html>